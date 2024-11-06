<!DOCTYPE html>
<html>

  <head>
    <title>Jam Analog</title>
    <style>
      .clock {
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background-color: #fff;
        position: relative;
      }

      .hour,
      .minute,
      .second {
        position: absolute;
        left: 50%;
        bottom: 50%;
        transform-origin: bottom center;
        border-top: 5px solid black;
        /* Panah */
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
      }

      .hour {
        width: 4px;
        height: 80px;
        background-color: black;
        transform: rotate(90deg);
      }

      .minute {
        width: 3px;
        height: 100px;
        background-color: black;
        transform: rotate(90deg);
      }

      .second {
        width: 2px;
        height: 120px;
        background-color: red;
        transform: rotate(90deg);
      }
    </style>
  </head>

  <body>
    <div class="clock">
      <div class="hour"></div>
      <div class="minute"></div>
      <div class="second"></div>
    </div>
    <script>
      const hour = document.querySelector('.hour');
      const minute = document.querySelector('.minute');
      const second = document.querySelector('.second');

      function setDate() {
        const now = new Date();
        const secondsRatio = now.getSeconds() / 60;
        const minutesRatio = (secondsRatio + now.getMinutes()) / 60;
        const hoursRatio = (minutesRatio + now.getHours()) / 12;

        setRotation(second, secondsRatio);
        setRotation(minute, minutesRatio);
        setRotation(hour, hoursRatio);
      }

      function setRotation(element, rotationRatio) {
        element.style.transform = `rotate(${rotationRatio * 360}deg)`;
      }

      setInterval(setDate, 1000);

      setDate();
    </script>
  </body>

</html>
