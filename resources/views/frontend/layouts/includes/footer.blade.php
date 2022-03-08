
<div class="footer">
    <div class="wrap">
    <div class="section group">
        <div class="col_1_of_4 span_1_of_4">
            <h3>Our Info</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="col_1_of_4 span_1_of_4">
            <h3>Latest-News</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="col_1_of_4 span_1_of_4">
            <h3>Store Location</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <h3>Order-online</h3>
            <p>Telephone No:{{\Illuminate\Support\Facades\Session::get('sitesetting') ? \Illuminate\Support\Facades\Session::get('sitesetting')->linkedin:''}}</p>
            <p>Mobile No:{{\Illuminate\Support\Facades\Session::get('sitesetting') ? \Illuminate\Support\Facades\Session::get('sitesetting')->linkedin:''}}</p>
        </div>
        <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
            <h3>News-Letter</h3>
            <form>
                <input type="text"><input type="submit" value="go" />
            </form>
            <h3>Follow Us:</h3>
             <ul>
                 <li><a href="{{\Illuminate\Support\Facades\Session::get('sitesetting') ? \Illuminate\Support\Facades\Session::get('sitesetting')->linkedin:''}} " target="_blank"><img src="images/twitter.png" title="twitter" />Twitter</a></li>
                 <li><a href="{{\Illuminate\Support\Facades\Session::get('sitesetting') ? \Illuminate\Support\Facades\Session::get('sitesetting')->facebook:''}} " target="_blank"><img src="images/facebook.png" title="Facebook" />Facebook</a></li>
                 <li><a href="{{\Illuminate\Support\Facades\Session::get('sitesetting') ? \Illuminate\Support\Facades\Session::get('sitesetting')->instragram:''}} " target="_blank"><img src="images/rss.png" title="Instragram" />Instragram</a></li>
             </ul>
        </div>
    </div>
</div>

<div class="clear"> </div>
<div class="wrap">
<div class="copy-right">
    <p>&copy; {{\Illuminate\Support\Facades\Session::get('sitesetting') ? \Illuminate\Support\Facades\Session::get('sitesetting')->copyright:''}}  <a href="http://w3layouts.com/">W3Layouts</a></p>
</div>
</div>
</div>
