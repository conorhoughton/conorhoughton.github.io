<?php
include("top.php");
?>

<h2><b>Notes.</a></b></h2><p> <p> <ol> <li>A brief set of example
distributions illustrating the condition, joint and marginal
distributions: <a href="../Notes/Bayes/31Jan2008.pdf">pdf</a>, <a
href="../Notes/Bayes/31Jan2008.c2.pdf">short pdf</a>, <a
href="../Notes/Bayes/31Jan2008.ps">ps</a> and <a
href="../Notes/Bayes/31Jan2008.tex">source</a>.  <li>A brief summary
of some definitions in the first part of chapter 2: <a
href="../Notes/DefinitionsSummary/6Feb2008.pdf">pdf</a>, <a
href="../Notes/DefinitionsSummary/6Feb2008.c2.pdf">short pdf</a>, <a
href="../Notes/DefinitionsSummary/6Feb2008.ps">ps</a> and <a
href="../Notes/DefinitionsSummary/6Feb2008.tex">source</a>.
<li>Positivity of the KL divergence: <a
href="../Notes/KLPositive/26Feb2008.pdf">pdf</a>, <a
href="../Notes/KLPositive/26Feb2008.c2.pdf">short pdf</a>, <a
href="../Notes/KLPositive/26Feb2008.ps">ps</a> and <a
href="../Notes/KLPositive/26Feb2008.tex">source</a>.
<li>Simple Markov chain example: <a
href="../Notes/MarkovExample/26Feb2008.1.pdf">pdf</a>, <a
href="../Notes/MarkovExample/26Feb2008.1.c2.pdf">short pdf</a>, <a
href="../Notes/MarkovExample/26Feb2008.1.ps">ps</a> and <a
href="../Notes/MarkovExample/26Feb2008.1.tex">source</a>.
<li>Another Markov chain example: <a
href="../Notes/MarkovExample2/24Feb2012.pdf">pdf</a>, <a
href="../Notes/MarkovExample2/24Feb2012.ps">ps</a> and <a
href="../Notes/MarkovExample2/24Feb2012.tex">source</a>.
<li>Infomax: <a
href="../Notes/Infomax/5Mar2008.pdf">pdf</a>, <a
href="../Notes/Infomax/5Mar2008.c2.pdf">short pdf</a>, <a
href="../Notes/Infomax/5Mar2008.ps">ps</a> and <a
href="../Notes/Infomax/5Mar2008.tar">source</a>. Some references:
<ul>
<li>The original Bell and Sejnowski paper <a href="http://www.maths.tcd.ie/~mnl/store/BellSejnowski1995a.pdf">BellSejnowski1995a</a>
<li>A paper by Pearlmutter and Parra which derives the algorithm from a maximum likelihood perspective <a href="http://www.maths.tcd.ie/~mnl/store/PearlmutterParra1995a.pdf">PearlmutterParra1995a</a>.
<li>An interesting application of infomax to visual images <a href="http://www.maths.tcd.ie/~mnl/store/BellSejnowski1996a.pdf">BellSejnowski1996a</a>
<li>Amari realised that the numerical behaviour of Infomax can be used by adding a metric <a href="http://www.maths.tcd.ie/~mnl/store/Amari1998a.pdf">Amari1998a</a>
<li>Although interesting mathematically, Infomax is not the most efficient way of solving the cocktail party problem, there is, for example: <a href="http://www.cis.hut.fi/projects/ica/fastica/">fastICA</a>.
</ul>
<li> Sample paper: <a href="../PP/sample2008/sample2008.pdf">pdf</a> or <a href="../PP/sample2008/sample2008.tex">source</a>. 
<ul>
<li>Solutions to q1 and 2: <a href="../PP/sample2008/sample2008.solns.q1-2.pdf">pdf</a>, <a href="../PP/sample2008/sample2008.solns.q1-2.c2.pdf">short pdf</a> or <a href="../PP/sample2008/sample2008.solns.q1-2.tex">source</a>.
<li>Solutions to q3: <a href="../PP/sample2008/sample2008.solns.q3.pdf">pdf</a> or <a href="../PP/sample2008/sample2008.solns.q3.tex">source</a>.
</ul>
<li> The first and last letter example: as an example of a joint distribution consider the random variables X and Y where X is the first letter of words in natural text and Y the last. <tt>Counter.cpp</tt> is a programme designed to estimate this on a sample of natural text <tt>Example.txt</tt>, actually an excerpt from Proust. Thus, p_X(e) is much smaller than p_Y(e) since in a piece of text more words will end in e that start with it and p_(Y|X)(e|t) will be quite high, 0.4 in fact, mostly because _the_ is such a common word. It is also easy to see p_(X,Y)=p_Xp_Y and the random variables are not independent.
<ul>
<li> <a href="../Notes/TextExample/Counter.cpp">Counter.cpp</a> and <a href="../Notes/TextExample/Example.txt">Example.txt</a>. Counter.cpp needs to be compiled and run in the same directory as Example.txt, on a Maths computer type <tt>g++ Counter.cpp</tt> and then <tt>./a.out</tt>.
</ul>
<li> The entropy of natural text: a simple version; using only the probability distribution of the characters a to z and space natural text has entropy H=4.08, versus H=log(27)=4.75 if the letters where uniformly distributed. This, again, is for the plainly unsatisfactory corpus taken from Proust.
<ul>
<li> <a href="../Notes/TextExample/Entropy.cpp">Entropy.cpp</a> and <a href="../Notes/TextExample/Example.txt">Example.txt</a>. Entropy.cpp needs to be compiled and run in the same directory as Example.txt, on a Maths computer type <tt>g++ Entropy.cpp</tt> and then <tt>./a.out</tt>.
</ul>
<li> The formula I(X,Y)=H(X)+H(Y)-H(X,Y) for the first and last letter distribution of natural text considered above.
<ul>
<li> <a href="../Notes/TextExample/Information.cpp">Information.cpp</a> and <a href="../Notes/TextExample/Example.txt">Example.txt</a>. Information.cpp needs to be compiled and run in the same directory as Example.txt, on a Maths computer type <tt>g++ Information.cpp</tt> and then <tt>./a.out</tt>.
</ul>
<li> 472 annual exam q1 <a href="../PP/472ann2007-8.q1.pdf">pdf of a scan of a handwritten soln</a>, q2 <a href="../PP/472ann2007-8.q2.pdf">pdf of a scan of a handwritten soln</a>, q3c <a href="../PP/472ann2007-8.q3c.pdf">pdf of a scan of a handwritten soln</a>, q4c <a href="../PP/472ann2007-8.q4c.pdf">pdf of a scan of a handwritten soln</a>.

</ol>


</p>

<p><br></p><p><br></p><p><br></p>


<?php
include("bottom.php");
?>