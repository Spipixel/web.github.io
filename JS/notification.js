function showNotification() {
    const notification = new Notification("Spipixel", {
      body: "You allowed notfication permission ",
      icon: "./ico/name.ico"
    });

    notification.onclick = (e) => {
      window.location.href = "https://spipixel.tk/";
    };
  }
  function newNotification() {
    const notification = new Notification("Spipixel", {
      body: "A new feature is coming in 14 Dec 2022 remember to check it out in 14 Dec",
      icon: "./ico/name.ico"
    });
    
    notification.onclick = (e) => {
      window.location.href = "https://spipixel.tk/";
    };
  }
  
  console.log(Notification.permission);

  if (Notification.permission === "granted") {
    showNotification();
    newNotification();
  }
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(permission => {
      if (permission === "granted") {
        showNotification();
        newNotification();
      }
      
    });
  }