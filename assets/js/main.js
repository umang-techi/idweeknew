
  
  
  // calender

    const checkinInput = document.getElementById('txtchkin');
  const checkoutInput = document.getElementById('txtchkout');

  flatpickr(checkinInput, {
    dateFormat: "Y-m-d",
    minDate: "today",
    onChange: function(selectedDates, dateStr, instance) {
      // Set the minDate of checkout to selected checkin date +1
      checkoutCalendar.set('minDate', dateStr);
    }
  });

  const checkoutCalendar = flatpickr(checkoutInput, {
    dateFormat: "Y-m-d",
    minDate: "today"
  });
  
// number system 
 const countdown = () => {
      const endDate = new Date("October 19, 2025 23:59:59").getTime();
      const now = new Date().getTime();
      const diff = endDate - now;

      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((diff % (1000 * 60)) / 1000);

      document.getElementById("days").innerText = days.toString().padStart(2, '0');
      document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
      document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
      document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
    };

    countdown(); // run once instantly
    setInterval(countdown, 1000); // update every second


  // Counter animation for attendees
  function animateCounter(id, target, speed = 30) {
    const el = document.getElementById(id);
    let count = 0;

    const update = () => {
      const increment = Math.ceil(target / 100);
      if (count < target) {
        count += increment;
        el.textContent = count.toLocaleString();
        setTimeout(update, speed);
      } else {
        el.textContent = target.toLocaleString();
      }
    };
    update();
  }


// number increase
  
  const counter = document.getElementById('attendeeCount');
  const target = +counter.getAttribute('data-target');
  let count = 0;

  const updateCount = () => {
    const speed = 200; // Change this to adjust speed
    const increment = target / speed;

    if (count < target) {
      count += increment;
      counter.innerText = Math.ceil(count).toLocaleString(); // Add comma
      requestAnimationFrame(updateCount);
    } else {
      counter.innerText = target.toLocaleString(); // Final value
    }
  };

  updateCount();


  // navbar





  //✅ JavaScript Validation Script 


// for presentation purpose
setTimeout(() => {
  elements.forEach(element => {
    element.classList.add('play');
  })
}, 600);

elements.forEach(element => {
  element.addEventListener('mouseover', () => {
    element.classList.remove('play');
  });
});


  //roling text

let elements = document.querySelectorAll('.rolling-text');

elements.forEach(element => {
  let innerText = element.innerText;
  element.innerHTML = '';
  
  let textContainer = document.createElement('div');
  textContainer.classList.add('block');
  
  for (let letter of innerText) {
    let span = document.createElement('span');
    span.innerText = letter.trim() === '' ? '\xa0': letter;
    span.classList.add('letter');
    textContainer.appendChild(span);
  }
  
  element.appendChild(textContainer);
  element.appendChild(textContainer.cloneNode(true));
});


// for presentation purpose
setTimeout(() => {
  elements.forEach(element => {
    element.classList.add('play');
  })
}, 600);

elements.forEach(element => {
  element.addEventListener('mouseover', () => {
    element.classList.remove('play');
  });
});





// form validation


function chk_frm() {
  const email1 = document.getElementById('txtEmail')?.value.trim();
  const email2 = document.getElementById('regismail')?.value.trim();
  const confirmInput = document.getElementById('regismail');
  const feedback = document.getElementById('email-error'); // Directly select it

  // Reset error state
  confirmInput.classList.remove('is-invalid');
  feedback.style.display = 'none';

  // Check if emails match
  if (email1 !== email2) {
    confirmInput.classList.add('is-invalid');
    feedback.textContent = "Emails do not match.";
    feedback.style.display = 'block';
    return false;
  }

  return true; // Emails match, allow form submission
}



function group_frm() {
  const email1 = document.getElementById('txtEmails')?.value.trim();
  const email2 = document.getElementById('regigroup')?.value.trim();
  const confirmInput = document.getElementById('regigroup');
  const feedback = confirmInput.nextElementSibling;

 
  confirmInput.classList.remove('is-invalid');
  feedback.style.display = 'none';

 
  if (email1 !== email2) {
    confirmInput.classList.add('is-invalid');
    feedback.textContent = "Emails do not match.";
    feedback.style.display = 'block';
    return false;
  }

  return true;
}



function chk_housing() {
  const email1 = document.getElementById('firstemail')?.value.trim();
  const email2 = document.getElementById('housemail')?.value.trim();
  const confirmInput = document.getElementById('housemail');
  const feedback = confirmInput.nextElementSibling;

  
  confirmInput.classList.remove('is-invalid');
  feedback.style.display = 'none';

  
  if (email1 !== email2) {
    confirmInput.classList.add('is-invalid');
    feedback.textContent = "Emails do not match.";
    feedback.style.display = 'block';
    return false;
  }

  return true;
}



 

   
