<style>
/* Flower Container */
.flower-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    perspective: 100px;
    animation: sway 6s infinite alternate ease-in-out;
    position: relative; /* Needed for absolute positioning inside */
}

/* Stem */

/* Flower Head */
.flower-head {
    position: relative;
    width: 120px; /* Larger flower head */
    height: 120px; /* Larger flower head */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: -10px; /* Adjust to overlap with the stem */
}

/* Petals */
.petal {
    position: absolute;
    width: 50px; /* Larger petals */
    height: 80px; /* Larger petals */
    background: linear-gradient(45deg, #f06292, #ec407a);
    border-radius: 50%;
    transform-origin: bottom center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.petal:nth-child(1) { transform: rotate(0deg); }
.petal:nth-child(2) { transform: rotate(45deg); }
.petal:nth-child(3) { transform: rotate(90deg); }
.petal:nth-child(4) { transform: rotate(135deg); }
.petal:nth-child(5) { transform: rotate(180deg); }
.petal:nth-child(6) { transform: rotate(225deg); }
.petal:nth-child(7) { transform: rotate(270deg); }
.petal:nth-child(8) { transform: rotate(315deg); }

/* Center of the Flower */
.flower-center {
    position: absolute;
    top: 50%; /* Align to the center */
    left: 50%; /* Align to the center */
    transform: translate(-50%, 40%); /* Offset for true centering */
    width: 50px;
    height: 50px;
    background: radial-gradient(circle, #ffe4e1, #ff69b4);
    border-radius: 50%;

}


</style>
<a href="{{ route('quiz') }}">
<div class="flower-container" >
    <div class="flower-head" >
        <div class="petal"></div>
        <div class="petal"></div>
        <div class="petal"></div>
        <div class="petal"></div>
        <div class="petal"></div>
        <div class="petal"></div>
        <div class="petal"></div>
        <div class="petal"></div>
    </div>

    <div class="flower-center"></div>
</div>
</a>