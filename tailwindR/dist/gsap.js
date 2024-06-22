
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
  delay: 3
}, 'rc');

tl.to(".zamp", {
  scale: 1,
  duration: 200000,
  transition: "all",
  delay: 10

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


// show more funtionality 






// Flag to track the toggle state
let isExpanded = false;
let originalHeight; // Will be determined dynamically

// Function to calculate and set originalHeight
function setOriginalHeight() {
  const content = document.querySelector('#showmore');
  originalHeight = window.getComputedStyle(content).maxHeight;
}

// Combined function to handle button text toggle, max-height animation, and scroll listener
function toggleContent() {
  // Ensure originalHeight is set if it's not already
  if (!originalHeight) {
    setOriginalHeight();
  }

  // Get the button and content elements
  const btn = document.querySelector('#showimages');
  const content = document.querySelector('#showmore');

  // Determine the new max-height and button text based on the current state
  const newMaxHeight = isExpanded ? originalHeight : "100%";
  const newText = isExpanded ? "Show me more" : "Bring me back";

  // Animate the max-height change
  gsap.to(content, {
    maxHeight: newMaxHeight
  });

  // Update the button text
  btn.textContent = newText;

  // Flip the state
  isExpanded = !isExpanded;


  
}

// Add event listener to your button
document.querySelector('#showimages').addEventListener('click', toggleContent);



function doFunction() {
  gsap.registerPlugin(ScrollTrigger);

  gsap.to("#insta", {
    scrollTrigger: {
      trigger: "#showmore",
      start: "1% 6%",
      end: "bottom 6%", // Adjust the end position
      scrub: true, // Keep scrubbing for scroll-based animation
    },
    y: "440",
    duration: 40, // Increase the duration
    ease: "slow", // Your animation properties here
  });
}

doFunction();

document.getElementById("#showimages").onclick = doFunction;

var el = document.getElementById("showimages");
if (el.addEventListener) {
  el.addEventListener("click", doFunction, false);
} else if (el.attachEvent) {
  el.attachEvent("onclick", doFunction);
}





