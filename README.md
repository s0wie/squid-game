![A gif of the squid game doll](https://media.giphy.com/media/yHEu9sPsWveuW4vG7G/giphy.gif)

# Squid Game Fanpage

> My very first PHP project @yrgo

This project was made to summarize what I've learnt so far in my PHP course, using fundamental concepts such as loops, arrays, functions and different data types. For this project, I've made a website about the Netflix series "Squid Game". You can take a look at it [here](https://susannelam.se/).

# Installation

1. Clone this repo to your desired folder.
2. Open the terminal, change direction to your folder and start a local server.
4. Go to the local server on your desired web browser.

# Code Review

Code review written by [Albin Andersson](https://github.com/itisalbin).

1. The "daysSinceRelease()" function (functions.php:19) is now showing days in fractions (E.g. '46.04166..'). Perhaps it would be better to show days in full numbers (instead E.g. '46'). This could easily be fixed by adding the built-in function 'round()' or 'floor()', which will round the number to its integer.

2. The traits showing under each player (triangle.php:33) could use a capital letter at the start. This can be done with the built-in php-function 'ucfirst()' or in CSS with the property 'text-transform: capitalize;'

3. Most images used by the site has a reasonable file-size for their purposes. A few could although perhaps be a bit smaller to make the page load quicker. Also, one of the images in the slideshow has a different dimension than the others, making the elements on the page move, which might not be desirable.

4. I think you have structured the code in a very orderly manner, with good naming on files and folders. That makes it easy to read through and work with for someone who doesn't know your project.

5. The page is very responsible and works well both on mobile as and on a bigger screen. You have also used no more than necessary CSS parameters in your media-queries, which again makes it easy to understand what will happen and easier to maintain.

# Testers

Tested by the following people:

1. Marcus Hägerstrand
2. Oliver Davis
