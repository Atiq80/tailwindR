
gsap.registerPlugin(ScrollTrigger);

var tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".lollz",
    start: "55% 50%",
    end: "350% 50%",
    scrub: true,
    pin: true,
    
    
  }
});

tl.to(".lollz", {
  scale: 3,
  duration: 200000,
  ease: "power1.inOut",
  delay: 3
}, 'rc');

tl.to("#Hero", {
  duration: 200000,
  y: 18,
  ease: "power4",
  delay: 3
}, 'rc');

tl.to(".zamp", {
  scale: 1,
  duration: 200000,
  ease: "power4",
  transition: "all",
  delay: 3

}, 'rc');

tl.to(".em1", {
  ease: "power4",
  opacity: 0,
  duration: 200000, // Increased duration to 200000 milliseconds (5 seconds) for slower opacity change
}, 'rc');

tl.to(".em2", {
  ease: "power4",
  opacity: 0,
  duration: 200000, // Increased duration to 200000 milliseconds (5 seconds) for slower opacity change
}, 'rc');

tl.to(".em3", {
  ease: "power4",
  opacity: 0,
  duration: 200000, // Increased duration to 200000 milliseconds (5 seconds) for slower opacity change
}, 'rc');

tl.to(".em4", {
  ease: "power4",
  opacity: 0,
  duration: 200000, // Increased duration to 200000 milliseconds (5 seconds) for slower opacity change
}, 'rc');




















// Get all image containers
// const imageContainers = document.querySelectorAll("#elem1");

// // Add a mousemove event listener to each image container
// imageContainers.forEach((container) => {
//     const image = container.querySelector("img");

//     container.addEventListener("mousemove", function (event) {
//         // Update the image position instantly
//         image.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
//     });
// });


// Get all image containers
// Get all image containers
const imageContainers = document.querySelectorAll("#elem1");

// Add a mousemove event listener to each image container
imageContainers.forEach((container) => {
    const image = container.querySelector("img");

    container.addEventListener("mousemove", function (event) {
        // Calculate the position relative to the container
        const rect = container.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;

        const imageX = x + image.width - 280;  // Adjust this value as needed


        // Update the image position instantly
        image.style.transform = `translate(${imageX}px, ${y}px)`;
    });
});


