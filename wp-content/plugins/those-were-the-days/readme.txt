=== Those Were The Days ===
Contributors: Martin Ford, Bochgoch
Donate link: http://www.bochgoch.com/?p=wp
Tags: featured posts,featured categories,cron,scheduling
Requires at least: 2.2
Tested up to: 2.3
Stable tag: trunk

This is a widgetised featured posts plugin that provides configurable links to posts that you want to highlight on your blog. 

== Description ==

Full configuration options are available.

* Define the pool of posts, by selecting individual posts or whole categories from which featured posts will be drawn.
* Configure the number of posts to be displayed and the method of selecting the posts (alphabetically, newest, oldest or randomly) displayed from the pool of posts.
* For featured posts show post title and optionally date, author and an excerpt of the post content.
* [Optionally] Select the frequency with which featured posts are reselected (By default hourly, 8, 4, 2 or 1 times a day).
* [Optionally] Choose to leave posts in the pool of posts after they have been featured or to remove them.

== Installation ==

1. Unzip into your `/wp-content/plugins/` directory
2. Activate 'Those Were The Days' through the 'Plugins' menu in WordPress
3. Go to the 'Those Were The Days' options page (Under Options on the main admin menu) and configure!
4. To activate the widget click the 'Presentation' then 'Widgets' menu options and drag the 'Those Were The Days' block into your sidebar.
5. View you site and then Refresh it once and the widget will start to operate!

== Frequently Asked Questions ==

= Where can I leave feedback about the Those Were The Days plugin? =
Visit www.bochgoch.com

= The first sentence of my post isn't showing! =
Ensure that there is no HTML markup in the post before the first sentence. HTML confuses Those Were The Days.

= I want a different time period
You can quite easily add some new time periods into the function twtd_add_intervals() in those_were_the_days.php. You'll need some PHP programming skills but it's pretty straight forward.

= Plugin doesn't seem to be working
Have you refreshed you blog as in step 5 of the installation instructions? ~ No, then go do that now!
