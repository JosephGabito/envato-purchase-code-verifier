<h1>:steam_locomotive: Envato Purchase Code Verifier</h1>
<p>
	Clone, download, or copy the 'EnvatoPurchaseCodeVerifier' nifty class to create your own Envato purchase verifier tool. You can go to index.php to see sample code. Read EnvatoPurchaseCodeVerifier.php to understand what the class is all about. It's really simple. 
</p>
<p>
	Contributions are highly appreciated! 
</p>
<hr>
<ol>
<li>First, require the verifier class: 
<pre>
require_once 'EnvatoPurchaseCodeVerifier.php';
</pre>
</li>
	
<li>Next, use the code below to create an instance of 'EnvatoPurchaseCodeVerifier'. Create your own access token at: https://build.envato.com/create-token 
<pre>
$purchase = new EnvatoPurchaseCodeVerifier($access_token);
</pre>
</li>	
<li>
Then, check the user purchase code:
<pre>
$verified = $purchase->verified($buyer_purchase_code);
// Will return false if purchase code is invalid, otherwise the purchase data.
</pre>
</li>
</ol>
<p>That's it! Happy Coding!</p>
