<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App   = new App();
$Nav  = new Nav();
$Menu   = new Menu();
$right_nav = FALSE;
$keyword = 'eclipse, 4.5, Mars, acknowledgements, acknowledgments, thanks';
require_once($_SERVER['DOCUMENT_ROOT'] ."/eclipse/development/nova/_projectCommon.php");


#echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">';


#*****************************************************************************
#
# index.php
#
# Author:    David Williams and others on Eclipse Project
# Date:      2015-06-16
#
# Description: Eclipse project Mars release acknowledgments page
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle     = "Eclipse Mars Acknowledgements";
$pageKeywords  = "eclipse, 4.5, Mars, acknowledgements, acknowledgments, thanks";
$pageAuthor    = "David Williams and the Eclipse Project Team";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# $Nav->addNavSeparator("My Page Links",   "downloads.php");
# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

# End: page-specific settings
#

# Paste your HTML content between the markers!
ob_start();
?>

<div id="midcolumn">


  <div class="homeitem3col">
    <h3>Eclipse Mars Acknowledgements</h3>

    <p>The entire Eclipse and Equinox team would like to thank the Eclipse Foundation staff for their tireless efforts, including: Denis Roy, Matt Ward, and Mikael Barbero for not only keeping all
      that infrastructure going, but also constantly improving it; Janet Campbell and Sharon Corbett for guiding us through the Eclipse legal process; Wayne Beaton for giving us improved tools to
      simplify and manage our development process; Ian Skerrett for his help with marketing the Eclipse release; and Mike Milinkovich for running the whole show. In particular, we appreciate the
      Eclipse Foundation providing resources to allow the building and signing of "Mac Apps" as true applications for MacosX, all propertly signed with the new requirements from Apple.</p>

    <p>We would also like to thank the users and adopters who support our efforts, through a range of activities, including early testing, being a <a href="https://eclipse.org/donate/">Friend of
        Eclipse</a>, contracting special work, or outright employment.</p>

    <p>A special mention should be made to thank to Luis Bernardo and the Apache Batik team who provided service versions on some very old versions of the 'org.apache.batik.dom' bundle, for the
      Mars release train. This was to fix a security issue discovered late in the cycle, and prevented everyone on the release train being required to move up to the latest version at the last minute.
      One of bundles, the oldest version, was even re-compiled with Java 1.2 libraries, as it was originally, which not only shows the age of the bundle, but shows that team's skill and care at
      release engineering. Overall, an excellent example of cooperation and collaboration with other Open Source projects, even outside of Eclipse.</p>

    <p>The Platform Workspace team would like to thank everyone who has helped by filing bugs, testing and providing patches. Specifically we would like to thank the following people who have
      helped improve the Workspace components by their code contributions to this release: Mat Booth, Steve Francisco, Markus Keller, Alexander Kurtakov, Robin Stocker, Lars Vogel and Paul Webster.</p>

    <p>The Platform UI team would like to thank everyone who has helped us to improve quality by testing and reporting bugs and enhancement requests. Special thanks to the following list of
      people, in alphabetic order, whow contributed code to the project: Alain Le Guennec, Alena Laskavaia, Alexander Baranov, Alexander Kurtakov, Alia Naguib, Andrey Loskutov, Anton Leherbauer,
      Aurelien Pupier, Bob Meincke, Boris Bokowski, Brian de Alwis, Bruce Skingle, Christian Georgi, Christoph Keimel, Cornel Izbasa, C. Sean Young, Daniel Rolka, David Williams, Denis Zygann, Dirk
      Fauth, Edwin Bruckner, Eugen Neufeld, Fabian Miehe, Fabio Zadrozny, Gary Roussak, Holger Voormann, Jeanderson Candido, Joachim Rainer, Jonas Helmig, Louis-Michel Mathurin, Marc-Andre Laperle,
      Marco Descher, Mariam El-Tantawi, Markus Alexander Kuppe, Markus Keller, Markus Schorn, Mat Booth, Michael Keppler, Michael Rennie, Mickael Istria, Moshe WAJNBERG, Noopur Gupta, Olivier
      Prouvost, Patrick Naish, Patrik Suzzi, Peter Palaga, Philip Wenig, Prakash Rangaraj, Ragnar Nevries, Ray Braithwood, Robert Roth, Sarika Sinha, Sebastian Herrmann, Sergey Prigogin, Shane Mills,
      Simon Scholz, Snjezana Peco, Sopot Cela, Stefan Weiser, Stefan Winkler, Stefan Xenos, Steffen Pingel, Stephan Hackstedt, Stephan Herrmann, Steve Francisco, Steven Spungin, Szymon Ptaszkiewicz,
      Terry Parker, Thibault Le Ouay, Thomas Watson, Timo Kinnunen, Tobias Baumann, Tomasz Zarna, Tom Schindl, Tony McCrary, Veselin Markov, Waqas Ilyas, Wim Jongman and Yaroslav Nikolaiko.</p>

    <p>The Platform Text team would like to thank everyone who filed good bug reports and enhancement requests. Special thanks go to Sergey Prigogin, Terry Parker, John Glassmyer, Jonah Graham,
      Nicolaj Hoess and Pawel Pogorzelski for providing patches.</p>

    <p>The Platform SWT team would like to thank everyone who helped to improve the toolkit by filing bug reports and enhancement requests, as well as the early adopters who contributed towards
      improving quality by testing. Special thanks go to : Alexander Kurtakov (reviewed and contributed several patches for GTK3), Leo Ufimtsev (DND and other fixes for GTK3), Snjezana Peco (fixed
      drawing issues related to GTK+ 3.10 and above including one 'greatfix' contribution), Marc-Andre Laperle (fixed unresponsive keyboard shortcuts in GTK3), Joshua Barkovic (contributed initial
      implementation for Wayland backend), Matthew Painter &amp; Neil Rashbrook (helped in improving support for newer versions of XULRunner), Nicolaj Hoess &amp; Marco Descher (added tooltip support for menu
      items). We would also like to thank Abhishek Kishore, Alexandra Buzila, Andrey Loskutov, Anton Leherbauer, Dani Megert, David Williams, Ian Bull, Jacek Sieka, James Watkins-Harvey, Jonny Lamb,
      Lars Vogel, Lina Kemmel, Markus Keller, Mat Booth, Matthias Mailänder, Mickael Istria, Mikael Barbero, Pascal Rapicault, Paul Webster, Peter White, Sami Wagiaalla, Sergey Prigogin, Sopot Cela,
      Stefan Xenos, Stephan Herrmann, Steve Francisco, Sudol Wojciech and Tobias Oberlies. We would like to appreciate Silenio Quarti, Bogdan Gheorghe and Grant Gayed for always supporting the team.</p>
   
    <p>The release engineering team would like to thank the many people who helped to improve 
    our build. Also, the webmasters at the Eclipse Foundation for their constant help and education;
    in particular Mikael Barbero who fixed several show-stopping issues in CBI. 
    I'd also like to thank the Tycho Team for providing fixes and timely updates to 
    Tycho -- two releases during Mars!</p>

    <p>The JDT Core team would like to thank everyone who has helped us to improve quality by testing and filing good bug reports. We would like to thank Stephan Hermann for his continued support
      with the huge number of fixes committed. We had two major contributions for Mars which resulted in the "greatfix" tag - Thanks to a)John Glassmyer for the set of bugs related to import rewrite
      consistency and cleanup and b) Mateusz Matula for formatter redesign. We would also like to thank Alexander Kurtakov, Ed Merks, Harry Terkelsen,Kenneth Olson, Szymon Ptaszkiewicz, Terry Parker,
      Ulrich Grave and Vladimir Piskarev. A special appreciation goes to Olivier Thomann for continuing to support the team.</p>

    <p>The JDT Debug team would like to thank everyone who helped improve the Java debugger by filing bugs, testing and providing patches. Specifically we would like to thank Aditya Aswani, Frits
      Jalvingh, Holger Schill and Max L. for bug fixes and Stephan Herrmann for work related to supporting external annotation to a JRE container.</p>

    <p>The Platform Debug team would like to thank everyone who helped improve the debugger framework by filing bugs, testing and providing patches. Specifically we would like to thank Lars and
      Tony McCrary for the new icons, Robert Roth for the "greatfix" contribution, Andrey Loskutov, Anton Leherbauer, Philippe Marschall and Richard Birenheide for bug fixes.</p>

    <p>The Platform Ant team would like to thank everyone who helped improve the ant framework by filing bugs, testing and providing patches. Specifically we would like to thank Rob Stryker and
      Julian Enoch for bug fixes.</p>

    <p>JDT UI sends thanks to everyone who filed good enhancement requests and helped to improve quality by testing and filing good bug reports. Special thanks to those who contributed code:
      Andrej Zachar, Christian Georgi, Dirk Olmes, Ferenc Hechler, Frits Jalvingh, Harry Terkelsen, Jeremie Bresson, Jerome Cambon, Moritz Eysholdt, Nicolaj Hoess, Nikolay Metchev, Robert Roth, Sandra
      Lions, Stephan Herrmann (now, a committer), Szymon Ptaszkiewicz, Terry Parker and Yves Joan. Thanks to Lars Vogel and Tony McCrary for the new icons. Also, thanks to Stephan Herrmann and others
      for their answers on forums/newsgroups.</p>

    <p>The Plug-in Development Environment team would like to thank the numerous contributors who continue to improve the component every release. We received many well written bug reports and the
      community was quick to verify our fixes. Special thanks to Lars Vogel who contributed in several areas of PDE, reviewed contributions of others and was voted in as a committer during the
      release. We thank Markus Keller for demonstrating high quality bug reporting and answering our many expert level questions about JDT and Platform. We appreciate all of the value our community
      adds to PDE and would specifically like to thank Brian de Alwis (Specify API baselines via target0, Peter Schulz (Edit software dialog in targets), Tony McCrary (replacing the entire icon set),
      Olivier Provoust (e4 integration into wizards), Simon Scholz (wildcard support in dialogs) and Pragya Gaur (huge number of polish fixes).</p>

    <p>The Equinox team would like to thank the entire Eclipse team and community for ...</p>

    <h3>Active Committers [TODO: same list as last year, so far, will update later, based on Git records.]</h3>
    <p>This Eclipse and Equinox release was brought to you by the following committers. These committers were active at the time of the release (that is, one or more commits since previous
      release.)</p>
    <p>
    <h4>Eclipse Platform</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Alexander Kurtakov</td>
        <td width="23%">Arun Thondapu</td>
        <td width="23%">Atsuhiko Yamanaka</td>
        <td width="23%">Bogdan Gheorghe</td>
      </tr>
      <tr>
        <td width="23%">Brian de Alwis</td>
        <td width="23%">Chris Austin</td>
        <td width="23%">Curtis Windatt</td>
        <td width="23%">Dani Megert</td>
      </tr>
      <tr>
        <td width="23%">Daniel Rolka</td>
        <td width="23%">David Williams</td>
        <td width="23%">Eric Moffatt</td>
        <td width="23%">Grant Gayed</td>
      </tr>

      <tr>
        <td width="23%">John Arthorne</td>
        <td width="23%">Lakshmi Priya Shanmugam</td>
        <td width="23%">Lars Vogel</td>
        <td width="23%">Lina Kemmel</td>
      </tr>
      <tr>
        <td width="23%">Malgorzata Janczarska</td>
        <td width="23%">Markus Keller</td>
        <td width="23%">Michael Rennie</td>
        <td width="23%">Niraj Modi</td>
      </tr>
      <tr>
        <td width="23%">Paul Elder</td>
        <td width="23%">Paul Webster</td>
        <td width="23%">Silenio Quarti</td>
        <td width="23%">Szymon Brandys</td>
      </tr>
      <tr>
        <td width="23%">Szymon Ptaszkiewicz</td>
        <td width="23%">Thanh Ha</td>
        <td width="23%">Thomas Schindl</td>
        <td width="23%">Thomas Watson</td>
      </tr>
      <tr>
        <td width="23%">Wojciech Sudol</td>
      </tr>
    </table>
    <h4>Eclipse JDT</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Anirban Chakraborty</td>
        <td width="23%">Curtis Windatt</td>
        <td width="23%">Dani Megert</td>
        <td width="23%">Deepak Azad</td>
      </tr>
      <tr>
        <td width="23%">Jayaprakash Arthanareeswaran</td>
        <td width="23%">Jesper Moller</td>
        <td width="23%">Manju Mathew</td>
        <td width="23%">Manoj Palat</td>
      </tr>
      <tr>
        <td width="23%">Markus Keller</td>
        <td width="23%">Michael Rennie</td>
        <td width="23%">Noopur Gupta</td>
        <td width="23%">Sarika Sinha</td>
      </tr>
      <tr>
        <td width="23%">Srikanth Sankaran</td>
        <td width="23%">Stephan Herrmann</td>
      </tr>
    </table>
    <h4>Eclipse PDE</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Andrew Niefer</td>
        <td width="23%">Curtis Windatt</td>
        <td width="23%">Dani Megert</td>
        <td width="23%">Michael Rennie</td>
      </tr>
    </table>
    <h4>Equinox</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Arun Thondapu</td>
        <td width="23%">BJ Hargrave</td>
        <td width="23%">John Arthorne</td>
        <td width="23%">John Ross</td>
      </tr>
      <tr>
        <td width="23%">Lazar Kirchev</td>
        <td width="23%">Martin Lippert</td>
        <td width="23%">Silenio Quarti</td>
        <td width="23%">Thomas Watson</td>
      </tr>
    </table>
    <h4>Equinox - p2</h4>
    <table
      width="92%"
      align="center">
      <tr>
        <td width="23%">Ian Bull</td>
        <td width="23%">John Arthorne</td>
        <td width="23%">Krzysztof Daniel</td>
        <td width="23%">Pascal Rapicault</td>
      </tr>
      <tr>
        <td width="23%">Susan McCourt</td>
        <td width="23%">Thomas Watson</td>
      </tr>
    </table>
  </div>

</div>
</body>
</html>


<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

