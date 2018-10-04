<?php
include("top.php");
?>
<h2><b>Questions, comments and answers.</a></b></h2>
<p><br></p>
<p>
16 October 2008<br>
<b>Reading week</b> I just wanted to check if you were giving a reading week in week 5 of term for your 481 course??<br>
<b>Reply</b> Yes I will.</p>
<p>
26 April 2009<br>
<b>Sample paper</b>
I am just going through the 481 sample paper and I have a few queries.
<ol>
<li> When you ask explain the reversal potential for E_K and E_Na I am not sure how much detail to give. Is it simply that the reversal potential is the equilibrium potential for which there is no overall net flow of that particular ion from one side of the membrane to the other or do you want us to derive the Nernst Equation or just jot it down with a diagram??
<li> For Q1(d) for the rough dynamics that produce a spike. Is the just describing the voltage changes which then cause the opening of ion channels etc ??
<li> And finally (well for now!) In question 2(b) whilst deriving the firing rate for leaky integrate and fire neuron I can't seem to follow what I have written in my notes:<br>
At the point Vthr = Vtisi = EL + RmIe + (Vreset - EL - RmIe) exp(-tisi/taum)<br>
I then would think that: exp(-tisi/taum) = (Vthr - EL - RmIe) / (Vreset - EL - RmIe)<br>

                                   tisi = - taum log ( (Vthr - EL - RmIe) / (Vreset - EL - RmIe) )<br>

                                   tisi = taum log ( (Vreset - EL - RmIe) / (Vthr - EL - RmIe) )<br>
However in the notes it says:   tisi = taum log ( (EL + RmIe - Vreset) / (EL + RmIe - Vthr) ) and I don't understand why the signs have changed over?? 
</ol>
<p>
Thanks very much<br>
<b>Reply</b>
</p>
<ol>
<li> No need for the Nernst equation; simply explain that there is a
chemical gradient and that a potential is need for zero net flow. It
would be nice to also note that Ohm's law is then considered to hold
around that reversal potential.
<li> A typical answer would include the points that the sodium channels
opening gate has the smallest time constant, so the sodium gates open
fastest leading leading to a rapid rise in the potential as sodium
rushes in to the cell; however very soon after that the sodium
channels start to close and the potassium channels open, potassium
leaving the cell brings the potential back to equilibrium and even
over-shoots it slightly. The gates then reset with the potassium
closing again and the sodium going from the second closed position to
the first closed position. A few lines could relate all of this to n,
m and h; thus, the n_infty and m_infty values go towards one when the
potential is higher than threshold, whereas h_infty goes to zero, this
means that n, m and h are doing exponential relaxation to these values
with their time constants again changing as the potential changes.
<li> Isn't the sign change just multiplying above and below the line
inside the log by minus one?
</ol>
</p>
<p>
27 April 2009<br>
<b>Sample paper</b> Hey I just have a question about Q 4 on this years sample paper, part b (the same question is on the 2007 paper Q2 b) I can't find this equation in my notes, I can find one without a beta in it. Similarly after checking Dayan and Abbott, page 192, there is the same set of equations but without the beta. Anyway, for this part of the question, would you be expected to show how this equation is derived? If so, I can't find it's derivation.<br>
<b>Reply</b> Whoops, the tau=1/beta; the equations should have either beta or tau, not both,  I will fix that now. You would be expected to give an brief
explanation of this equation; basically if there is a fixed closing
rate, each gate has a fixed chance of closing, then the total number
closing is beta P and hence dP/dt=-beta P; or tau dP/dt=-P is
tau=1/beta.</p>

<p>11 April 2009<br>
<b>Study</b> Has the course changed much since the last time you gave. Is the exam a good indication of what to study?<br>
<b>Reply</b> The course is largely unchanged; the order of the material is different, but mostly not the material itself, both the last exam and the sample paper should give a good indication as to what to study. I am very sorry I didn't reply to this message when it was sent; your message ended up in my spam folder, I am having trouble with my anonymous mailer getting spam.
</p>

<p>12 May 2009<br>
<b>PS2a</b>
Hi, I just have a few quick question. Firstly, on the problems page of the 481 site there is a line that has Problem Sheet 2a on it with the line "What is the Fano factor for inhomogenous Poisson spiking?" I don't recall there being a third problem sheet or another section of Problem Sheet 2 from the lectures, so I was just wondering what this is. Thanks a lot.<br>
<b>Reply</b> It was a suplementary problem I mentioned in the tutorial class which is supposed to illustrate the inhomogenous Poisson spiking calculation. I have been meaning to add the solution for the longest time and will do it before the end of Wednesday. Sorry for the delay. <b>Later</b> Done now.</p>

<p>21 May 2009<br>
<b>Sample paper q3</b> I was just wondering for example on question 3 of the 2007 exam, the question is
"What is the Poisson process? Is neural spiking a Poisson process?" Would it be good to discuss both homogeneous and in-homogeneous for
the first bit and mention about the fact that it does not depend on
what has already happened? I don't think you are looking for a formula
here? And for the second bit say yes or no and give a short explanation why?
<br>
<b>Reply</b> The key point is that a Poisson process has a rate function and the
chance of a spike depends only on that rate function and not on the
spiking history; the rate function can be constant, the homogeneous
case, or time varying: the inhomogenous case.<br>
Spiking is not Poisson, most obviously because of the refractory
period, there is a short time after a spike during which the cell
cannot spike again, irrespective of the rate function.<br>
Any answer that included these points would get full marks.</p>

<p>28 May 2009<br>
<b>Voltages</b> Hi, Was wondering if you could tell me if I am at all on the right track to answering this past paper exam questions?<br>
<br>
<b>Draw a diagram of a voltage compact neuron showing where there are high sodium and potassium concentrations and giving approx equilibrium voltages for the interior and exterior??</b><br>
<br>
OK so the diagran will show a neuron with 0 voltage outside where there is a higher concentrate of sodium ions ( approx 150 vs 15 inside) and a -70 voltage inside for which there is a higher concentration of potassium ions (140 vs. 5 outside) .<br>
The equilibrium voltage is then -70 across the membrane.<br>
Is this sufficient?? I think I am confused as why the compact neuron differs from the typical neuron which actually has a voltage difference of -60??? Thank you.<br>
<b>Reply</b> That is the right answer. A compact neuron is one where the voltage
inside is constant; in a real neuron there will be variations from one
part of the neuron to another with currents moving around. You have to
use a compartment model to deal with this, we didn't cover this. The different figures -60, -70 are all approximate and, of course,
vary from neuron to neuron, so either answer would be fine.</p>

<p>30 May 2009<br> <b>Gates</b> Looked at your online handwritten
notes and cant really make out the ion channel diagrams.<br> So the
difference between a sodium channel and a potassium channel is that a
sodium channel has a gate like a ball on a string that is hanging down
in the open state and the ball is blocking the gap in the closed
state, while a potassium channel has voltage sensors like flaps on
each side of the channel which if open are aimed towards the outside
of the cell and if closed are then aimed toward the inside of the cell
and there is an obvious blocked pathway through the ion channel????<br>
Thank you.<br>
<b>Reply</b> Basically the potassium gate has one gate which is normally closed;
the sodium two, one that is like the potassium gate (gate A) and is
normally closed, the other (gate B) is the ball-on-string gate that is
normally open. As the voltage rises the closed gates open and the open
gate closes and the spike is made from the timing differences of these
events:<br>
sodium gate A opens, voltage goes up ----> sodium gate B closes and
potassium gate opens, voltage falls again ---> everything goes back to
the original values.<br>
Hope this helps.</p>


<p>3 June 2009<br> <b>SRA</b> I'm not exactly sure how to explain spike rate adaption particularly articulately.. or what points you would be looking for? This is what I'm thinking so far:
The spike rate adaption incorporates how the neuron adapts after the spike has occurred and channels are closing (??) So we add an extra slow potassium current into our model: tau dV/dt = EL +RmIe - rm gsra (V - Ek). This makes V move towards Ek and away from the threshold value. It thus effects the outcome in two ways by altering the firing rate and making it slower as the numerator is increased and by slowing down the relaxation to equilbrium after the spike as -V --> (1 + rm gsra)<br>
<b>Reply</b> Best to phrase it phenomenologically: It is observed that if a neuron spikes repeatedly the spike rate
decreases, with timescales of the order of 100ms; this is easiest to
observe if the input current is constant, rather than producing a
constant spike rate this tends to elicit more spikes at the start and
less later on [draw a picture of constant spiking and one where the
spikes become a bit more spread out.] Then say, one way to model is
this to add an extra slow potassium . . .  and carry on as you did.</p>

<p>3 June 2009<br> <b>Past paper q2c and 1d</b> 'm unsure of what to do with Question 2 (c) from the 2007 paper?
Also did we cover Question 1 (d)? <br>
<b>Reply</b> For question 2c the equation is the HH equation for sub-threshold
dynamics, which is just the I&F equation using the relevant
conductance; so for one spike the conductance is g=g_max e^{-t/tau_s}
and the equation is then<br>
tau_m dV/dt=E_l-V+g(E_a-V)<br>
where E_a is the reversal potential for the ion gated by the synapse,
this is sodium for excitatory synapse and potassium for inhibitory. If there are two spikes, the formula for g is more complicated.<br>
This was a sort of left-field question designed to test that you know
the conductance isn't the same as the post-synaptic pulse, that the HH
equation approximates to I&F and that the relevant reversal potential
depends on synapse type.<br>
As for 1d, I did mention the circuit analogy briefly, but we certainly
didn't emphasis it, and if a question about it was asked this year
there would be much more guidance. The issue of linearity is
important, the HH is non-linear because the equations for the
conductances are non-linear, the have a non-linear dependence on the
gate probabilities, which are themselves non-linear. The I&F model
simplifies this and is nonlinear just because of the reset.</p>

<p>3 June 2009<br> <b>Past paper q3d</b> On the off chance that you get this before the exam I was just wondering if you could help me in answering this question? Is the firing rate calculated using 1/&#916;t by the integral of the &#961; function? Also I couldn't find any mention of how the rate is calculated in the case where there is a limited number of trials. Possibly a sum of the &#961; function divided by &#916;t? Thanks very much<br>
<b>Reply</b> The firing rate is calculated as<br>
r(t) = \int_t^{t+\Delta t} &lt;\rho(t')&gt; dt'    (*)<br>
where the &lt; . . . &gt; denotes and average over the trials and the
rho(tau) is a spike train expressed as a sum of delta functions, the
idea is that with enough spike trains the Delta t can be taken to be
small. If there is only a limited number of trials a spike rate is
estimated by filtering the spike train first<br>
\tilde{r}(t)=\int_0^T w(t')\rho(t-t')<br>
and then taking the trial average again<br>
r(t)=&lt;\tilde{r}(t)&gt;<br>
The filter w(t) can be chosen to give the spike rate nice properties;
if it is a square window this gives the same answer as the original
calculation, if it is a Gaussian curve, for example, it gives a smooth
function.<br>
No good explanation was given as to how you could derive the best
filter in a principled way, and, in fact, none exists. It is in my
view a good research question, but as for the exam question, the
answer is what I said above, with maybe some discussion as to why the
square filter and (*) give the same answer, this is on page 25 of the
scanned notes.<br>
I hope this helps and good look for tomorrow.</p>

<p>3 June 2009<br> <b>Plasticity</b> Okay thanks. Few more questions in reference to synapses:<br>
When asked to compare Hebb's Law with "neurons that fire together wire together" is it enough to state Hebb's Law (if neuron A fires and B fires shortly after then more often than can be expected by chance there is an increase in synapse strength between A and B) and then say that the statement oversimplifies the Law??<br>
Spike Timing Dependent Plasticity: should we state any equations to do with the plasticity time scale? Or just say something like: Spike-timing-dependent plasticity refers to a functional change at the synapse which is sensitive to the timing of spikes in connected neurons. i.e to increases or decreases in plasticity of the synapse which helps lead to long term potentiation or long term depression?<br>
<b>Reply</b> You need to say what the oversimplification is: Hebbs law is causal,
when A causes B then the connection from A to B gets stronger, neurons
that fire together wire together says that if A and B happen at around
the same time the connection gets strong, even if A happens soon after
B.<br>
In STDP the plasticity depends on precise timing, like Hebbs original
law, rather than the rates of firing of the two neurons, as in
"neurons that fire together wire together".<br>
<b>Further question</b> 
I see but if A spikes say very soon after B then couldn't you say that B "causes" A and thus there's a strength in the connection anyway? <br>
<b>Reply</b> That would be the connection going the other way; if B causes A Hebb
would predict the synapse from B to A would get stronger. Synapses
have a direction.</p>

</p>

<p>4 June 2009<br> <b>Still up</b> Just checking if you're still up? It would be cool if this was like a 24-hour exam help forum (although I don't expect you to actually do that).<br>
<b>Reply</b> Do I look like someone who ever gets any sleep? You however should get some rest.</p>


<p>4 June 2009<br> <b>Synapses</b> I'm just wondering, how you integrate dP_s/dt = alpha_s(1 - P_s) to get P_s(t) = 1 + (P_s(0) - 1) e^-((alpha_s)t) ? It's in the postsynaptic conductance section of the notes.<br>
<b>Reply</b> Well first you solve the differential equation; it is an inhomogeneous linear equation so you can do it with an integrating factor, I will leave out the _s for convenience and replace alpha_s with a<br>
dP/dt_a+aP=a<br>
gives<br>
d(e^{at}P)/dt=ae^{at}<br>
and so integrating both sides<br>
e^{at}P=e^{at}+C<br>
or, dividing the exponential across<br>
P=Ce^{-at}+1<br>
Substituting t=0 shows C=P(0)-1 and from that the answer. Now go to bed.</p>






<?php
include("bottom.php");
?>
