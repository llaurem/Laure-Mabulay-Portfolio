<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kasi Digital</title>
    <link rel="stylesheet" href="style.css">
    <link rel="script" href="script.js">
</head>

<body style="background: #cad6df; overflow-x: hidden; font-family: 'Poppins', sans-serif; padding: 0; margin: 0; scroll-behavior:smooth;">

    <nav id="desktop-nav" style="display: flex; justify-content: space-around; align-items: center; height: 17vh;">
        <img src="http://kasidigital.org/wp/wp-content/uploads/2024/08/KASIDLOGO3.png" alt="logo" class="logo" style="width: 100px; height: 80px; display: flex; justify-content: space-around; align-items: center;">
        <div>
            <ul class="nav-links" style="display: flex; gap: 2rem; list-style: none; font-size: 1.5rem; padding: 0; margin: 0; box-sizing: border-box;">
                <li><a href="#about" style="color: #14569a; text-decoration: none; transition: all 300ms ease;">About</a></li>
                <li><a href="#partners" style="color: #14569a; text-decoration: none; transition: all 300ms ease;">Partners</a></li>
                <button class="btn btn-color-2" onclick="window.open('https://form.jotform.com/242183389232559')" style="font-weight: 600; transition: all 300ms ease; padding: 1rem; width: 8rem; border-radius: 2rem; border: rgb(53,53,53) 0.1rem solid; background: #0c3a69; color: white;">Apply</button>
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav" style="display: none;">
        <img src="http://kasidigital.org/wp/wp-content/uploads/2024/08/KASIDLOGO3.png" alt="logo" class="logo" style="width: 100px; height: 80px; display: flex; justify-content: space-around; align-items: center;">
        <div class="hamburger-menu" style="position: relative; display: inline-block;">
            <div class="hamburger-icon" onclick="toggleMenu()" style="display: flex; flex-direction: column; justify-content: space-between; height: 24px; width: 30px; cursor: pointer;">
                <span style="width: 100%; height: 2px; background-color: #14569a; transition: all 0.3s ease-in-out;"></span>
                <span style="width: 100%; height: 2px; background-color: #14569a; transition: all 0.3s ease-in-out;"></span>
                <span style="width: 100%; height: 2px; background-color: #14569a; transition: all 0.3s ease-in-out;"></span>
            </div>
            <div class="menu-links" style="position: absolute; top: 100%; right: 0; background-color: #cad6df; width: fit-content; max-height: 0; overflow: hidden; transition: all 0.3s ease-in-out;">
                <li style="list-style: none;"><a href="#about" onclick="toggleMenu()" style="display: block; padding: 10px; text-align: center; font-size: 1.5rem; color: black; text-decoration: none; transition: all 0.3s ease-in-out;">About</a></li>
                <li style="list-style: none;"><a href="#partners" onclick="toggleMenu()" style="display: block; padding: 10px; text-align: center; font-size: 1.5rem; color: black; text-decoration: none; transition: all 0.3s ease-in-out;">Partners</a></li>
                <button class="btn btn-color-2" onclick="window.open('https://form.jotform.com/242183389232559')" style="font-weight: 600; transition: all 300ms ease; padding: 1rem; width: 8rem; border-radius: 2rem; border: rgb(53,53,53) 0.1rem solid; background: #0c3a69; color: white;">Apply</button>
            </div>
        </div>
    </nav>