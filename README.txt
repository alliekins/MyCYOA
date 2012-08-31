This is the Choose Your Own Adventure Builder, created for CSH Game Jam Spring 2012.

Sample story running at http://applejack.csh.rit.edu/gamejam

Author: Alex Howland
Build time: 5 hours, including a sample 10-page CYOA story. Actual code time was about 1.5 hours.

HOW TO USE THIS:
Copy sample_mycyoa.php to a new file called mycyoa.php
Create a directory for your page text. I call mine "contents".
For each "page" of your CYOA, create a text file called {pagenum}.txt in the contents folder. So if you had three pages, you would have 1.txt, 2.txt, and 3.txt.
Place the text to display for each page in each page's text file.
Now go into mycyoa.php and find the text "{Your Page Directory}" and replace it with the directory of pages you just made.
Now go through and make your links for the bottom of each CYOA page in mycyoa.php using the $mycyoa->addLink() function as shown.
Once you've written all your pages and linked 'em up, go ahead and navigate to index.php and start adventuring!
