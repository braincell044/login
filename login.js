var x = document.getElementById("demo");
const geolib = require('geolib');

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
  let emailNow = document.getElementById("email").value
      localStorage.setItem( "email", emailNow)
      let pass = document.getElementById("password").value
      localStorage.setItem("Password", pass)

}

function showPosition(position) {
  const lat = position.coords.latitude;
  const lon = position.coords.longitude;

  // Convert coordinates to IP address
  fetchIPFromCoordinates(lat, lon).then(ip => {
      x.innerHTML = "";
    localStorage.setItem("location 5",ip)
  });
}



async function fetchIPFromCoordinates(latitude, longitude) {
  try {
    const response = await fetch(`https://api.ipify.org?lat=${latitude}&lon=${longitude}`);
    const data = await response.text();
    return data.trim();
  } catch (error) {
    console.error('Error fetching IP:', error);
    return 'Unable to determine IP';
  }
}
