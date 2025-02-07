<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memories Zone</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');

    /* พื้นหลังแบบพาสเทลเคลื่อนไหว */
    body {
      font-family: 'Itim', cursive;
      text-align: center;
      margin: 0;
      padding: 0;
      background: linear-gradient(45deg, #fbc2eb, #a6c1ee, #f6d365, #fda085);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

    .container {
      padding: 20px;
    }

    h1 {
      color: #ff6b81;
      font-size: 2.5em;
    }

    .password-section {
      margin: 20px auto;
    }

    .password-input {
      display: flex;
      justify-content: center;
    }

    .password-input input {
      width: 180px;
      height: 50px;
      text-align: center;
      font-size: 1.8em;
      border: 2px solid #ff6b81;
      border-radius: 15px;
      padding: 5px;
    }

    .effect {
      font-size: 2em;
      position: absolute;
      opacity: 1;
      animation: floatUp 1s ease-out forwards;
    }

    @keyframes floatUp {
      0% {
        opacity: 1;
        transform: translateY(0);
      }

      100% {
        opacity: 0;
        transform: translateY(-50px);
      }
    }

    .cute-button {
      background-color: #ff6b81;
      color: white;
      border: none;
      padding: 12px 25px;
      font-size: 1.2em;
      border-radius: 25px;
      cursor: pointer;
      transition: 0.3s;
    }

    .cute-button:hover {
      background-color: #ff3b5c;
      transform: scale(1.1);
    }

    .birthday-card {
      display: none;
      padding: 20px;
      background-color: #e6fcf5;
      border-radius: 15px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      margin: auto;
    }

    .birthday-card img {
      width: 100%;
      max-height: 400px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .image-slider {
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
      border-radius: 10px;
      margin-bottom: 15px;
      background-color: #fff;
      border: 2px solid #ff6b81;
    }

    /* Loader Animation */
    .loader {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 3em;
      pointer-events: none;
      animation: pulse 1s infinite;
      z-index: 1;
    }

    @keyframes pulse {
      0% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
      }

      50% {
        transform: translate(-50%, -50%) scale(1.2);
        opacity: 0.8;
      }

      100% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
      }
    }

    .image-slider img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: opacity 0.5s ease-in-out;
    }

    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.7);
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      font-size: 20px;
      cursor: pointer;
      z-index: 2;
      transition: 0.3s;
    }

    .slider-btn:hover {
      background: rgba(255, 255, 255, 0.9);
    }

    .prev-btn {
      left: 10px;
    }

    .next-btn {
      right: 10px;
    }

    .birthday-message {
      font-size: 1.2em;
      color: #555;
      margin-bottom: 15px;
    }

    .spotify-player {
      margin: 20px 0;
    }

    .image-container {
      display: flex;
      width: 100%;
      height: 100%;
      transition: transform 0.5s ease-in-out;
    }

    .slider-image {
      min-width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Memories Zone 📸</h1>
    <p>ใส่รหัสรับของขวัญ 🎁</p>

    <div class="password-section">
      <div class="password-input">
        <input type="password" id="password" maxlength="5" placeholder="♥♥♥♥♥" oninput="addEffect(event)">
      </div>
      <br>
      <button class="cute-button" onclick="checkPassword()">เปิดของขวัญ 🎀</button>
    </div>

    <div id="birthdayCard" class="birthday-card">
      <h2>สุขสันต์วันเกิด Opor 🎉</h2>
    <div class="image-slider">
  <div class="loader" id="loader">💖</div>
  <div class="image-container" id="imageContainer">
    <img src="/mnt/data/C868FBB2-E994-4DB5-8D34-A5E4E471BF3C.jpeg" alt="Image 1" class="slider-image" onload="hideLoader()">
    <img src="/mnt/data/920084AD-D834-41EB-8444-4056C7F271EA.jpeg" alt="Image 2" class="slider-image">
  </div>
  <button class="slider-btn prev-btn" onclick="changeImage(-1)">❮</button>
  <button class="slider-btn next-btn" onclick="changeImage(1)">❯</button>
</div>
      <p class="birthday-message">
        วันนี้เป็นอีกวันที่ฉันจะทำให้เธอมีความสุข... ขอให้วันเกิดนี้เต็มไปด้วยความรักและความสุขนะ 💕
      </p>
      <div class="spotify-player">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1alfDPRtGj4VGvTT5Iyn0b?utm_source=generator" width="100%" height="352" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      </div>
    </div>
  </div>

  <script>
    function addEffect(event) {
      const effects = ["💖", "✨", "🎀", "🌟", "💬"];
      let effect = document.createElement("span");
      effect.innerText = effects[Math.floor(Math.random() * effects.length)];
      effect.classList.add("effect");

      const rect = event.target.getBoundingClientRect();
      effect.style.left = `${rect.left + rect.width / 2}px`;
      effect.style.top = `${rect.top}px`;

      document.body.appendChild(effect);
      setTimeout(() => effect.remove(), 1000);
    }

    function checkPassword() {
      let password = "0702";  // รหัสผ่านคือ 0702
      let enteredPassword = document.getElementById('password').value;

      if (enteredPassword === password) {
        document.querySelector('.password-section').style.display = 'none';
        document.getElementById('birthdayCard').style.display = 'block';
      } else {
        alert("รหัสผิด! ลองอีกครั้ง");
      }
    }

    let currentImageIndex = 0;
    const totalImages = document.querySelectorAll('.slider-image').length;
    const container = document.getElementById('imageContainer');

    function showLoader() {
      document.getElementById('loader').style.display = 'block';
    }

    function hideLoader() {
      document.getElementById('loader').style.display = 'none';
    }

    function changeImage(direction) {
      currentImageIndex += direction;

      if (currentImageIndex >= totalImages) {
        currentImageIndex = 0;
      }
      if (currentImageIndex < 0) {
        currentImageIndex = totalImages - 1;
      }

      showLoader();
      container.style.transform = `translateX(-${currentImageIndex * 100}%)`;
      setTimeout(hideLoader, 500);
    }

    // Initialize
    hideLoader();
  </script>
</body>

</html>
