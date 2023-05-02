<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheTruePower</title>
    <link rel="stylesheet" href="car.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <a href="car.php" class="brand">Sphere.
            </a>
            <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Garage</a></li>
            <li><a href="https://www.audi.se/se/web/sv/models/r8/r8-coupe-v10-performance-quattro.html">About us</a></li>
            <li><a href="https://www.audi.se/se/web/sv/models/r8/r8-coupe-v10-performance-quattro/bygg-bestall-din-audi.html" class="btn">Purchase</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div> 
        </nav>
        <div class="header-body">
            <div>
                <h1>Join The Journey</h1>
                <p>Leaner and meaner then ever. The new audi R8 boddly goes where no car has gone before</p>
            </div>
        </div>
    </header>
    <section class="about">
        <div class="heading">
            <h2>Take a journey,
                <br/>
                bend space
            </h2>
            <p>
                The R8 can't help but steal the spotlight. WIth this sharp angular lines and exotic glass covered engine, the R8 has a wide commanding pressece that makes it impossible to look anywhere else.
            </p>
        </div>
        <div class="infos">
            <div class="info">
                <img src="audiimgs/audir8logo.png" alt="audir8logo"/>
                <div>
                    <h3>Agility</h3>
                    <p>Built for speed, with a 5.2 liter v10 engine</p>
                </div>
            </div>
            <div class="info">
                <img src="audiimgs/icon2.png" alt="icon2"/>
                <div>
                    <h3>Performance</h3>
                    <p>
                        Accelerating from zero to 100kmph in 3.2s
                    </p>
                </div>
            </div>
            <div class="info">
                <img src="audiimgs/icon3.png" alt="icon3"/>
                <div>
                    <h3>Cutting Edge</h3>
                    <p>Sharing half of its parts with the R8 LMS racecar</p>
                </div>
            </div>
        </div>
    </section>
    <section class="specs">
        <div>
            <div class="specs-header">
                <h2>Tech Specs</h2>
                <span>Engine</span>
            </div>
            <ul>
                <li>
                    <span>Engine displacement</span>
                    <span>5204</span>
                </li>
                <li>
                    <span>Maximum power</span>
                    <span>601.4 bhp @ 8250 rpm</span>
                </li>
                <li>
                    <span>Maximum torque</span>
                    <span>560 Nm @ 6500 rpm</span>
                </li>
                <li>
                    <span>Turning radius</span>
                    <span>5.9 m</span>
                </li>
                <li>
                    <span>No. of cylinders</span>
                    <span>10</span>
                </li>
                <li>
                    <span>Drive Type</span>
                    <span>AWD</span>
                </li>
                <li>
                    <span>Turbo Charger</span>
                    <span>No</span>
                </li>
                <li>
                    <span>Super Charger</span>
                    <span>Yes</span>
                </li>
                <li>
                    <span>Fuel Supply</span>
                    <span>Direct injections</span>
                </li>
            </ul>
        </div>
    </section>
    <section class="pnaels">
        <div class="panels-sm">
            <div class="panel">
                <div>
                <div class="icon">
                    <i class="fas fa-fire"></i>
                </div>
                <h2>Power and speed unleashed</h2>
                <a href="#">
                    <span>Learn More</span>
                    <i class="fasfa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel">
            <div>
                <div class="icon">
                    <i class="fas fa-tint"></i>
                </div>
                <h2>Respectful to enviroment</h2>
            </div>
        </div>
    </div>
    <div class="panel-lg"></div>
    </section>
    
    <section class="car-stats">
        <div class="stats">
            <div>
            <h1 class="counter" data-target="331" data-speed="10">0</h1>
            <h1>kmph</h1>
            <h5>Top Speed</h5>
        </div>
        <div>
         <h1 class="counter" data-target="7" data-speed="500">0</h1>
        <h1>gears</h1>
        <h5>Gear Box</h5>
        </div>
        <div>
            <h1 class="counter" data-target="620" data-speed="1">0</h1>
            <h1>hp</h1>
            <h5>Horse Power</h5>
        </div>
    </div>
    <div class="car">
        <div class="circle">
        <img src="audiimgs/car.png" alt="car"/>
        <div class="inner-md-circle"></div>
        <div class="inner-sm-circle"></div>
    </div>
    </div>
    </section>
    <script src="car.js"></script>

</body>
</html>
