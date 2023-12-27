// GSAP ANIMATION

var tl = gsap.timeline();

tl.from(".card", {
    duration: 0.5,
    delay:1,
    scale:0,
    opacity:0,
    stagger: 0.2
});

gsap.from(".ht-title , .ht-img-container", {
    duration: 0.5,
    scale:0,
    opacity:0,
    stagger: 0.5,
});

gsap.from(".ht-para , .list>li", {
    duration: 0.5,
    x:-5000,
    stagger: 0.2,
    scrub: 3,
});

