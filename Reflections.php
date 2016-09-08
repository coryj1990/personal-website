<!DOCTYPE html>
<html>
<head><link type="text/css"; rel="stylesheet"; href="styletheindex.css"/>
<title> Thoughts on the News </title>
</head>
<body>


<?php 
include 'short-the-nav.php';
navigate (reflec);
?>

<div id="content">
<div>
	<h2> Thoughts on recent hacker news posts </h2>
	<a href="https://blogs.windows.com/msedgedev/2016/06/20/edge-battery-anniversary-update/"></a>
</div>
<div style="padding:20px;">
<p>The article details the efforts made by microsoft to identify areas where a computer is losing battery life over unnecessary or preventable things. Examples used in the article were a website’s HTML, CSS, or javascript coding. Sometimes the website demands cause a computer to focus more on processing what is to be displayed and how. This didn’t get too much detail as to how their Energy Estimation Engine (E3) would work to fix issues for the website’s internal workings, but did mention that their labs are constantly testing and monitoring user activity to get data on where computers fail to perform optimally. 
Limiting background tasks from unused browser tabs was noted as a strategy, but nothing direct. This makes sense as, for most users, they often view things one at a time, and to have a computer constantly run the same operations as if the content was present or not is counter to efficient processing. Other factors like animations and ads and the use of flash were listed as things microsoft pursued to drastically decrease power consumption. The interface was said to be designed for the least amount of power usage. By optimizing the animation for one of their button resulted in a 75% decrease in GPU usage. These small tasks from showing content to using interfaces should not be used as examples for improving performance. I say this because as someone with a background in engineering, the more efficient in a given system the better the system will be!
My takeaway here is if I truly care about the experience my future websites offer, one sure way to ruin that experience is carelessly using multiple features without regard to its demand on hardware.
</p>

<h3> Internet as a medium </h3>
<p> The internet is composed of sending and directing packets of information by through the use of a personal computer using an ISP and the used website is on a server. Given the near infinite types of information that can be sent, or code used to set up websites, the internet enables the user to find or do almost anything that is accessed on the net.
This instrument allows someone to find what they are looking for and use that newly found knowledge to benefit their life. Even to produce this body of text I needed to use the internet to see what other people had to say about how the internet works to improve our lives. Mostly, to view the internet as a medium implies that there is one singular phrase to sum up how the internet can be used. While there may be a technical answer, I believe given the functionality that the internet has shown to me there are multiple uses for multiple users the internet offers and as it grows, so do the ways it is used.
</p>

<h3> Thoughts on linking files within multi-level folder structure </h3>
<p> It would be safe to claim that every website that is out there is composed of saved files within a cluster of folders each with their own purpose of breaking down the website into its necessary characteristics and functions. Because some websites may have many features and functions, there would be the need to store each of those into their respected folders which would produce even more folders to separate those contents from others. A focus on folder arrangement can make it easier for a developer to access the needed contents within a single folder, but I can think of a few things that this approach would be hazardous. By basing the initial level of folders by page would then lead to the following levels as content and decorative files. If there were to be another page to include the same content or decorations then a copy of the same files would need to exist in the second pages folder as well as the first. A principle in keeping coding clean is the don’t repeat yourself and in this case having the same file exist in more than one place would create unnecessary clutter.
Now that its established that the least amount of folders is desired to save files into, the way to access the contents of each file within those folders is done by properly linking to them. I like to envision a setup where the file reader is standing (or at) the folder and reads the folders contents from that position. It doesn’t hop into each file to process its contents, it will “view” single files that it is told to look at. The needed text to access a file within a different folder is, within the present folder/file for html is <a href=”Core/firstolder/file.filetype> (stuff to click to get to file) </a>. This text can be simplified even further. For most cases, the folder system already is using the Core file as its basis, so the href can be used as /firstfolder/otherfile.filetype. If there is a file within the same folder that our reader is at, then we can simply link the other file as href= “otherfile.filetype”. By looking at the “/firstfolder/otherfile.filetype” and “otherfile.filetype” a big difference is the / at the beginning of the first example. This is because the / will tell the reader to reset itself at the core folder to begin looking for first folder, and then the other file. The second case, the one without the /, will keep the reader at the present folder and search for the other file. If we were to use firstfolder/otherfile.filetype, would ask the reader to move to firstfolder that must be within the “view” of the reader. A way to just go back one folder level instead of all the way to the core is to put ../ infront of the file that exists in the folder that is one level above the present folder our reader is in. Say Folder 1 has file 1 in it, but Folder 1 also has Folder 2 in it (thus making it a second level folder compared to a first level folder) and file 2 resides in this second folder. To link file1 inside file2, we can use “../file1” for the href that is written in file 2. Using ../ as well as / are the tools I know of so far to simplify a link to a file existing in the same or different folder. Using this syntax would help reduce the amount of text that exists within files, thus making it easier, and more appealing to read.
</p>


<h3> HTML tags at their basic meanings </h3>
<p> The purpose of head tags in a html file is to give the file its title. The contents put within the title tags, which are inside the head tags, will be presented in the browser tab. Everything else within html tags will serve as instructions, links to css files, or setting values that will not be viewable to the site viewer.

html tags tell the browser the start and end of an html file’s contents. All html elements should be placed within these tags.

Content that the html file has is shown within the body tags. Nearly all of html elements are meant to be used in the body of an html file. 
</p>
</div>


</body>
</html>






