<!DOCTYPE html>
<html>
  <head>
    <title>Dynatable.js - jQuery plugin for HTML5+JSON interactive tables and more</title>
    <meta name="description" content="Dynatable is a funner, semantic, interactive table plugin using jQuery, HTML5, and JSON. And it's not just for tables.">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <meta property="og:url" content="http://www.dynatable.com" />
    <meta property="og:title" content="Dynatable.js - jQuery plugin for HTML5+JSON interactive tables and more" />
    <meta property="og:image" content="https://s3.amazonaws.com/dynatable-docs-assets/images/dynatable-with-name.png" />
    <meta property="og:description" content="Dynatable is a funner, semantic, interactive table plugin using jQuery, HTML5, and JSON. And it's not just for tables." />

    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/reset.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/bootstrap-2.3.2.min.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/application.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/project.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/pygments.css" />
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/share.css" />
    <link href='//fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/dynatable-docs.css" />
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.scrollTo.js'></script>
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.toc.min.js'></script>
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.sharrre-1.2.0.min.js'></script>


    <!-- resources for project demos //-->
    
    <link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/jquery.dynatable.css" />
    
    
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/jquery.dynatable.js'></script>
    
    <script type='text/javascript' src='https://s3.amazonaws.com/dynatable-docs-assets/js/highcharts.js'></script>
    


  </head>
  <body>
    
    <div id='splashbar'>
      <div class=''>
        <div class="splash-left">
          <img id="plugin-graphic" src="https://s3.amazonaws.com/dynatable-docs-assets/images/dynatable.png" />
        </div>
        
        
      </div>
    </div>
    <div id='tagbar'  class='homepage' >
      <div class='contained'>
        <div id='share-container'>
          <div id="shareme" data-url="http://www.dynatable.com" data-text="Dynatable.js - jQuery plugin for HTML5+JSON interactive tables and more" data-title="<span>share this:</span> <img src='https://s3.amazonaws.com/dynatable-docs-assets/images/dynatable-share-white.png' />"></div>
        </div>
        <div id="last-commit"></div>
      </div>
    </div>
    <div id='content' class='contained'>

      <div id='toc-container'>
        <div id='toc'>
        </div>
      </div>

      <a href="#" id="menu-toggle" class="btn btn-navbar" title="Menu" alt="Menu">
        <i class="icon-th-list icon-white"></i>
      </a>

      <div id='post'>
        <h2 class="first-heading">Demo</h2>




<div class="dynatable-dfrtgyuiemo">

<table id="example-table" class="table table-bordered">
<thead>
<tr>
<th>Rank</th>
<th>Country</th>
<th>US $</th>
<th>Year</th>
</tr>
</thead>
<tr>
<td>1</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Luxembourg.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Luxembourg" title="Luxembourg">Luxembourg</a></td>
<td>113,533</td>
<td>2011</td>
</tr>
<tr>
<td>2</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Qatar.svg.png" width="22" height="9" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Qatar" title="Qatar">Qatar</a></td>
<td>98,329</td>
<td>2011</td>
</tr>
<tr>
<td>3</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Norway.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Norway" title="Norway">Norway</a></td>
<td>97,255</td>
<td>2011</td>
</tr>
<tr>
<td>4</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/20px-Flag_of_Switzerland.svg.png" width="20" height="20" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Switzerland" title="Switzerland">Switzerland</a></td>
<td>81,161</td>
<td>2011</td>
</tr>
<tr>
<td>5</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_United_Arab_Emirates.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/United_Arab_Emirates" title="United Arab Emirates">United Arab Emirates</a></td>
<td>67,008</td>
<td>2011</td>
</tr>
<tr>
<td>6</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Australia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Australia" title="Australia">Australia</a></td>
<td>65,477</td>
<td>2011</td>
</tr>
<tr>
<td>7</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Denmark.svg.png" width="22" height="17" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Denmark" title="Denmark">Denmark</a></td>
<td>59,928</td>
<td>2011</td>
</tr>
<tr>
<td>8</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sweden.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Sweden" title="Sweden">Sweden</a></td>
<td>56,956</td>
<td>2011</td>
</tr>
<tr>
<td>9</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Canada.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Canada" title="Canada">Canada</a></td>
<td>50,436</td>
<td>2011</td>
</tr>
<tr>
<td>10</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Netherlands.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Netherlands" title="Netherlands">Netherlands</a></td>
<td>50,355</td>
<td>2011</td>
</tr>
<tr>
<td>11</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Austria.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Austria" title="Austria">Austria</a></td>
<td>49,809</td>
<td>2011</td>
</tr>
<tr>
<td>12</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Finland.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Finland" title="Finland">Finland</a></td>
<td>49,350</td>
<td>2011</td>
</tr>
<tr>
<td>13</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Singapore.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Singapore" title="Singapore">Singapore</a></td>
<td>49,271</td>
<td>2011</td>
</tr>
<tr>
<td>14</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_United_States.svg.png" width="22" height="12" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/United_States" title="United States">United States</a></td>
<td>48,387</td>
<td>2011</td>
</tr>
<tr>
<td>15</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kuwait.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kuwait" title="Kuwait">Kuwait</a></td>
<td>47,982</td>
<td>2011</td>
</tr>
<tr>
<td>16</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ireland.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Republic_of_Ireland" title="Republic of Ireland">Ireland</a></td>
<td>47,513</td>
<td>2011</td>
</tr>
<tr>
<td>17</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Belgium_%28civil%29.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Belgium" title="Belgium">Belgium</a></td>
<td>46,878</td>
<td>2011</td>
</tr>
<tr>
<td>18</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Japan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Japan" title="Japan">Japan</a></td>
<td>45,920</td>
<td>2011</td>
</tr>
<tr>
<td>19</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_France.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/France" title="France">France</a></td>
<td>44,008</td>
<td>2011</td>
</tr>
<tr>
<td>20</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Germany.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Germany" title="Germany">Germany</a></td>
<td>43,742</td>
<td>2011</td>
</tr>
<tr>
<td>21</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Iceland.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Iceland" title="Iceland">Iceland</a></td>
<td>43,088</td>
<td>2011</td>
</tr>
<tr>
<td>22</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_United_Kingdom.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/United_Kingdom" title="United Kingdom">United Kingdom</a></td>
<td>38,592</td>
<td>2011</td>
</tr>
<tr>
<td>23</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_New_Zealand.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/New_Zealand" title="New Zealand">New Zealand</a></td>
<td>36,648</td>
<td>2011</td>
</tr>
<tr>
<td>24</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Brunei.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Brunei" title="Brunei">Brunei</a></td>
<td>36,584</td>
<td>2011</td>
</tr>
<tr>
<td>25</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Italy.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Italy" title="Italy">Italy</a></td>
<td>36,267</td>
<td>2011</td>
</tr>
<tr>
<td>-</td>
<td align="left"><i><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Europe.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/European_Union" title="European Union">European Union</a></i></td>
<td>35,116</td>
<td>2011</td>
</tr>
<tr>
<td>-</td>
<td align="left"><i><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Hong_Kong.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Hong_Kong" title="Hong Kong">Hong Kong</a></i></td>
<td>34,049</td>
<td>2011</td>
</tr>
<tr>
<td>26</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Spain.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Spain" title="Spain">Spain</a></td>
<td>32,360</td>
<td>2011</td>
</tr>
<tr>
<td>27</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Israel.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Israel" title="Israel">Israel</a></td>
<td>31,986</td>
<td>2011</td>
</tr>
<tr>
<td>28</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cyprus.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Cyprus" title="Cyprus">Cyprus</a></td>
<td>30,571</td>
<td>2011</td>
</tr>
<tr>
<td>29</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Greece.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Greece" title="Greece">Greece</a></td>
<td>27,073</td>
<td>2011</td>
</tr>
<tr>
<td>30</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Slovenia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Slovenia" title="Slovenia">Slovenia</a></td>
<td>24,533</td>
<td>2011</td>
</tr>
<tr>
<td>31</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Oman.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Oman" title="Oman">Oman</a></td>
<td>23,315</td>
<td>2011</td>
</tr>
<tr>
<td>32</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Bahamas.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/The_Bahamas" title="The Bahamas">Bahamas, The</a></td>
<td>23,175</td>
<td>2011</td>
</tr>
<tr>
<td>33</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bahrain.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bahrain" title="Bahrain">Bahrain</a></td>
<td>23,132</td>
<td>2011</td>
</tr>
<tr>
<td>34</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_South_Korea.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/South_Korea" title="South Korea">Korea, South</a></td>
<td>22,778</td>
<td>2011</td>
</tr>
<tr>
<td>35</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Portugal.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Portugal" title="Portugal">Portugal</a></td>
<td>22,413</td>
<td>2011</td>
</tr>
<tr>
<td>36</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Malta.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Malta" title="Malta">Malta</a></td>
<td>21,028</td>
<td>2011</td>
</tr>
<tr>
<td>37</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Saudi_Arabia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Saudi_Arabia" title="Saudi Arabia">Saudi Arabia</a></td>
<td>20,504</td>
<td>2011</td>
</tr>
<tr>
<td>38</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Czech_Republic.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Czech_Republic" title="Czech Republic">Czech Republic</a></td>
<td>20,444</td>
<td>2011</td>
</tr>
<tr>
<td>39</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Republic_of_China.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Taiwan" title="Taiwan">Taiwan</a></td>
<td>20,101</td>
<td>2011</td>
</tr>
<tr>
<td>40</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Slovakia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Slovakia" title="Slovakia">Slovakia</a></td>
<td>17,644</td>
<td>2011</td>
</tr>
<tr>
<td>41</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Trinidad_and_Tobago.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Trinidad_and_Tobago" title="Trinidad and Tobago">Trinidad and Tobago</a></td>
<td>17,158</td>
<td>2011</td>
</tr>
<tr>
<td>42</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Estonia.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Estonia" title="Estonia">Estonia</a></td>
<td>16,583</td>
<td>2011</td>
</tr>
<tr>
<td>43</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Barbados.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Barbados" title="Barbados">Barbados</a></td>
<td>16,148</td>
<td>2011</td>
</tr>
<tr>
<td>44</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Equatorial_Guinea.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Equatorial_Guinea" title="Equatorial Guinea">Equatorial Guinea</a><sup id="cite_ref-6" class="reference"><a href="#cite_note-6"><span>[</span>7<span>]</span></a></sup></td>
<td>14,661</td>
<td>2011</td>
</tr>
<tr>
<td>45</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Croatia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Croatia" title="Croatia">Croatia</a></td>
<td>14,457</td>
<td>2011</td>
</tr>
<tr>
<td>46</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Chile.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Chile" title="Chile">Chile</a></td>
<td>14,278</td>
<td>2011</td>
</tr>
<tr>
<td>47</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Hungary.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Hungary" title="Hungary">Hungary</a></td>
<td>14,050</td>
<td>2011</td>
</tr>
<tr>
<td>48</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Uruguay.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Uruguay" title="Uruguay">Uruguay</a></td>
<td>13,914</td>
<td>2011</td>
</tr>
<tr>
<td>49</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Antigua_and_Barbuda.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Antigua_and_Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</a></td>
<td>13,552</td>
<td>2011</td>
</tr>
<tr>
<td>50</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Poland.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Poland" title="Poland">Poland</a></td>
<td>13,540</td>
<td>2011</td>
</tr>
<tr>
<td>51</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Lithuania.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Lithuania" title="Lithuania">Lithuania</a></td>
<td>13,075</td>
<td>2011</td>
</tr>
<tr>
<td>52</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Russia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Russia" title="Russia">Russia</a></td>
<td>12,993</td>
<td>2011</td>
</tr>
<tr>
<td>53</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Brazil.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Brazil" title="Brazil">Brazil</a></td>
<td>12,789</td>
<td>2011</td>
</tr>
<tr>
<td>54</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Saint_Kitts_and_Nevis.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Saint_Kitts_and_Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</a></td>
<td>12,728</td>
<td>2011</td>
</tr>
<tr>
<td>55</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Latvia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Latvia" title="Latvia">Latvia</a></td>
<td>12,671</td>
<td>2011</td>
</tr>
<tr>
<td>56</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Seychelles.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Seychelles" title="Seychelles">Seychelles</a></td>
<td>11,170</td>
<td>2011</td>
</tr>
<tr>
<td>57</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Argentina.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Argentina" title="Argentina">Argentina</a></td>
<td>10,945</td>
<td>2011</td>
</tr>
<tr>
<td>58</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kazakhstan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kazakhstan" title="Kazakhstan">Kazakhstan</a></td>
<td>10,694</td>
<td>2011</td>
</tr>
<tr>
<td>59</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Gabon.svg.png" width="22" height="17" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Gabon" title="Gabon">Gabon</a></td>
<td>10,654</td>
<td>2011</td>
</tr>
<tr>
<td>60</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Venezuela.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Venezuela" title="Venezuela">Venezuela</a></td>
<td>10,610</td>
<td>2011</td>
</tr>
<tr>
<td>61</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Turkey.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Turkey" title="Turkey">Turkey</a></td>
<td>10,522</td>
<td>2011</td>
</tr>
<tr>
<td>62</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mexico.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mexico" title="Mexico">Mexico</a></td>
<td>10,153</td>
<td>2011</td>
</tr>
<tr>
<td>-</td>
<td align="left"><span class="flagicon" style="padding-left:24px;">&#160;</span><i><a target="_blank" href="http://en.wikipedia.org/wiki/World" title="World">World</a></i><sup id="cite_ref-7" class="reference"><a href="#cite_note-7"><span>[</span>8<span>]</span></a></sup></td>
<td>10,144</td>
<td>2011</td>
</tr>
<tr>
<td>63</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Lebanon.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Lebanon" title="Lebanon">Lebanon</a></td>
<td>9,862</td>
<td>2011</td>
</tr>
<tr>
<td>64</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Malaysia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Malaysia" title="Malaysia">Malaysia</a></td>
<td>9,700</td>
<td>2011</td>
</tr>
<tr>
<td>65</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Botswana.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Botswana" title="Botswana">Botswana</a></td>
<td>9,481</td>
<td>2011</td>
</tr>
<tr>
<td>66</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Costa_Rica.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Costa_Rica" title="Costa Rica">Costa Rica</a></td>
<td>8,877</td>
<td>2011</td>
</tr>
<tr>
<td>67</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Romania.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Romania" title="Romania">Romania</a></td>
<td>8,863</td>
<td>2011</td>
</tr>
<tr>
<td>68</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mauritius.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mauritius" title="Mauritius">Mauritius</a></td>
<td>8,777</td>
<td>2011</td>
</tr>
<tr>
<td>69</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Panama.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Panama" title="Panama">Panama</a></td>
<td>8,514</td>
<td>2011</td>
</tr>
<tr>
<td>70</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_South_Africa.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/South_Africa" title="South Africa">South Africa</a></td>
<td>8,066</td>
<td>2011</td>
</tr>
<tr>
<td>71</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Grenada.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Grenada" title="Grenada">Grenada</a></td>
<td>7,878</td>
<td>2011</td>
</tr>
<tr>
<td>72</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Saint_Lucia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Saint_Lucia" title="Saint Lucia">Saint Lucia</a></td>
<td>7,435</td>
<td>2011</td>
</tr>
<tr>
<td>73</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Montenegro.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Montenegro" title="Montenegro">Montenegro</a></td>
<td>7,317</td>
<td>2011</td>
</tr>
<tr>
<td>74</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bulgaria.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bulgaria" title="Bulgaria">Bulgaria</a></td>
<td>7,202</td>
<td>2011</td>
</tr>
<tr>
<td>75</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Colombia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Colombia" title="Colombia">Colombia</a></td>
<td>7,132</td>
<td>2011</td>
</tr>
<tr>
<td>76</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Suriname.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Suriname" title="Suriname">Suriname</a></td>
<td>7,096</td>
<td>2011</td>
</tr>
<tr>
<td>77</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Dominica.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Dominica" title="Dominica">Dominica</a></td>
<td>6,909</td>
<td>2011</td>
</tr>
<tr>
<td>78</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Azerbaijan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></td>
<td>6,832</td>
<td>2011</td>
</tr>
<tr>
<td>79</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Iran.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Iran" title="Iran">Iran</a></td>
<td>6,360</td>
<td>2011</td>
</tr>
<tr>
<td>80</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Saint_Vincent_and_the_Grenadines.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Saint_Vincent_and_the_Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</a></td>
<td>6,342</td>
<td>2011</td>
</tr>
<tr>
<td>81</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Serbia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Serbia" title="Serbia">Serbia</a></td>
<td>6,081</td>
<td>2011</td>
</tr>
<tr>
<td>82</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Maldives.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Maldives" title="Maldives">Maldives</a></td>
<td>5,973</td>
<td>2011</td>
</tr>
<tr>
<td>83</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Belarus.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Belarus" title="Belarus">Belarus</a></td>
<td>5,881</td>
<td>2011</td>
</tr>
<tr>
<td>84</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Namibia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Namibia" title="Namibia">Namibia</a></td>
<td>5,828</td>
<td>2011</td>
</tr>
<tr>
<td>85</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Peru.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Peru" title="Peru">Peru</a></td>
<td>5,782</td>
<td>2011</td>
</tr>
<tr>
<td>86</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Libya.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Libya" title="Libya">Libya</a></td>
<td>5,691</td>
<td>2011</td>
</tr>
<tr>
<td>87</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Dominican_Republic.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Dominican_Republic" title="Dominican Republic">Dominican Republic</a></td>
<td>5,639</td>
<td>2011</td>
</tr>
<tr>
<td>88</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/China" title="China">China</a></td>
<td>5,414</td>
<td>2011</td>
</tr>
<tr>
<td>89</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Jamaica.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Jamaica" title="Jamaica">Jamaica</a></td>
<td>5,402</td>
<td>2011</td>
</tr>
<tr>
<td>90</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Thailand.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Thailand" title="Thailand">Thailand</a></td>
<td>5,394</td>
<td>2011</td>
</tr>
<tr>
<td>91</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Algeria.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Algeria" title="Algeria">Algeria</a></td>
<td>5,304</td>
<td>2011</td>
</tr>
<tr>
<td>92</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Angola.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Angola" title="Angola">Angola</a></td>
<td>5,144</td>
<td>2011</td>
</tr>
<tr>
<td>93</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Macedonia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Republic_of_Macedonia" title="Republic of Macedonia">Macedonia, Republic of</a></td>
<td>5,016</td>
<td>2011</td>
</tr>
<tr>
<td>94</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Jordan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Jordan" title="Jordan">Jordan</a></td>
<td>4,675</td>
<td>2011</td>
</tr>
<tr>
<td>95</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Turkmenistan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Turkmenistan" title="Turkmenistan">Turkmenistan</a></td>
<td>4,658</td>
<td>2011</td>
</tr>
<tr>
<td>96</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bosnia_and_Herzegovina.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bosnia_and_Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</a></td>
<td>4,618</td>
<td>2011</td>
</tr>
<tr>
<td>97</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ecuador.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Ecuador" title="Ecuador">Ecuador</a></td>
<td>4,424</td>
<td>2011</td>
</tr>
<tr>
<td>98</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tunisia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tunisia" title="Tunisia">Tunisia</a></td>
<td>4,351</td>
<td>2011</td>
</tr>
<tr>
<td>99</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Belize.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Belize" title="Belize">Belize</a></td>
<td>4,349</td>
<td>2011</td>
</tr>
<tr>
<td>100</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tonga.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tonga" title="Tonga">Tonga</a></td>
<td>4,221</td>
<td>2011</td>
</tr>
<tr>
<td>101</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Albania.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Albania" title="Albania">Albania</a></td>
<td>3,992</td>
<td>2011</td>
</tr>
<tr>
<td>102</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Fiji.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Fiji" title="Fiji">Fiji</a></td>
<td>3,965</td>
<td>2011</td>
</tr>
<tr>
<td>103</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_East_Timor.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/East_Timor" title="East Timor">East Timor</a></td>
<td>3,949</td>
<td>2011</td>
</tr>
<tr>
<td>104</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_El_Salvador.svg.png" width="22" height="12" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/El_Salvador" title="El Salvador">El Salvador</a></td>
<td>3,855</td>
<td>2011</td>
</tr>
<tr>
<td>105</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Republic_of_the_Congo.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Republic_of_the_Congo" title="Republic of the Congo">Congo, Republic of the</a></td>
<td>3,714</td>
<td>2011</td>
</tr>
<tr>
<td>106</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cape_Verde.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Cape_Verde" title="Cape Verde">Cape Verde</a></td>
<td>3,661</td>
<td>2011</td>
</tr>
<tr>
<td>107</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ukraine.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Ukraine" title="Ukraine">Ukraine</a></td>
<td>3,621</td>
<td>2011</td>
</tr>
<tr>
<td>108</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kosovo.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Republic_of_Kosovo" title="Republic of Kosovo">Kosovo</a><sup id="cite_ref-uscensuspop_8-0" class="reference"><a href="#cite_note-uscensuspop-8"><span>[</span>9<span>]</span></a></sup></td>
<td>3,534</td>
<td>2011</td>
</tr>
<tr>
<td>109</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Iraq.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Iraq" title="Iraq">Iraq</a></td>
<td>3,513</td>
<td>2011</td>
</tr>
<tr>
<td>110</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Indonesia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Indonesia" title="Indonesia">Indonesia</a></td>
<td>3,509</td>
<td>2011</td>
</tr>
<tr>
<td>111</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Samoa.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Samoa" title="Samoa">Samoa</a></td>
<td>3,451</td>
<td>2011</td>
</tr>
<tr>
<td>112</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Swaziland.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Swaziland" title="Swaziland">Swaziland</a></td>
<td>3,358</td>
<td>2011</td>
</tr>
<tr>
<td>113</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tuvalu.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tuvalu" title="Tuvalu">Tuvalu</a><sup id="cite_ref-uscensuspop_8-1" class="reference"><a href="#cite_note-uscensuspop-8"><span>[</span>9<span>]</span></a></sup></td>
<td>3,319</td>
<td>2011</td>
</tr>
<tr>
<td>114</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Paraguay.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Paraguay" title="Paraguay">Paraguay</a></td>
<td>3,252</td>
<td>2011</td>
</tr>
<tr>
<td>115</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Georgia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Georgia_(country)" title="Georgia (country)">Georgia</a></td>
<td>3,210</td>
<td>2011</td>
</tr>
<tr>
<td>116</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Guyana.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Guyana" title="Guyana">Guyana</a></td>
<td>3,202</td>
<td>2011</td>
</tr>
<tr>
<td>117</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Guatemala.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Guatemala" title="Guatemala">Guatemala</a></td>
<td>3,182</td>
<td>2011</td>
</tr>
<tr>
<td>118</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Morocco.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Morocco" title="Morocco">Morocco</a></td>
<td>3,083</td>
<td>2011</td>
</tr>
<tr>
<td>119</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mongolia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mongolia" title="Mongolia">Mongolia</a></td>
<td>3,042</td>
<td>2011</td>
</tr>
<tr>
<td>120</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Vanuatu.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Vanuatu" title="Vanuatu">Vanuatu</a></td>
<td>3,036</td>
<td>2011</td>
</tr>
<tr>
<td>121</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Armenia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Armenia" title="Armenia">Armenia</a></td>
<td>3,033</td>
<td>2011</td>
</tr>
<tr>
<td>122</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Egypt.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Egypt" title="Egypt">Egypt</a></td>
<td>2,970</td>
<td>2011</td>
</tr>
<tr>
<td>123</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sri_Lanka.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Sri_Lanka" title="Sri Lanka">Sri Lanka</a></td>
<td>2,877</td>
<td>2011</td>
</tr>
<tr>
<td>124</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Syria.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Syria" title="Syria">Syria</a></td>
<td>2,803</td>
<td>2010</td>
</tr>
<tr>
<td>125</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bolivia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bolivia" title="Bolivia">Bolivia</a></td>
<td>2,315</td>
<td>2011</td>
</tr>
<tr>
<td>126</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Philippines.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Philippines" title="Philippines">Philippines</a></td>
<td>2,223</td>
<td>2011</td>
</tr>
<tr>
<td>127</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bhutan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bhutan" title="Bhutan">Bhutan</a></td>
<td>2,121</td>
<td>2011</td>
</tr>
<tr>
<td>128</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Honduras.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Honduras" title="Honduras">Honduras</a></td>
<td>2,116</td>
<td>2011</td>
</tr>
<tr>
<td>129</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sudan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Sudan" title="Sudan">Sudan</a></td>
<td>1,982</td>
<td>2011</td>
</tr>
<tr>
<td>130</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Moldova.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Moldova" title="Moldova">Moldova</a></td>
<td>1,969</td>
<td>2011</td>
</tr>
<tr>
<td>131</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Papua_New_Guinea.svg.png" width="22" height="17" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Papua_New_Guinea" title="Papua New Guinea">Papua New Guinea</a></td>
<td>1,900</td>
<td>2011</td>
</tr>
<tr>
<td>132</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kiribati.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kiribati" title="Kiribati">Kiribati</a></td>
<td>1,593</td>
<td>2011</td>
</tr>
<tr>
<td>133</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Uzbekistan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></td>
<td>1,572</td>
<td>2011</td>
</tr>
<tr>
<td>134</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Solomon_Islands.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Solomon_Islands" title="Solomon Islands">Solomon Islands</a></td>
<td>1,554</td>
<td>2011</td>
</tr>
<tr>
<td>135</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ghana.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Ghana" title="Ghana">Ghana</a></td>
<td>1,529</td>
<td>2011</td>
</tr>
<tr>
<td>136</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Nigeria.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Nigeria" title="Nigeria">Nigeria</a></td>
<td>1,490</td>
<td>2011</td>
</tr>
<tr>
<td>137</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sao_Tome_and_Principe.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe" title="São Tomé and Príncipe">São Tomé and Príncipe</a></td>
<td>1,473</td>
<td>2011</td>
</tr>
<tr>
<td>138</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Djibouti.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Djibouti" title="Djibouti">Djibouti</a></td>
<td>1,467</td>
<td>2011</td>
</tr>
<tr>
<td>139</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Zambia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Zambia" title="Zambia">Zambia</a></td>
<td>1,414</td>
<td>2011</td>
</tr>
<tr>
<td>140</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_India.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/India" title="India">India</a></td>
<td>1,389</td>
<td>2011</td>
</tr>
<tr>
<td>141</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Vietnam.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Vietnam" title="Vietnam">Vietnam</a></td>
<td>1,374</td>
<td>2011</td>
</tr>
<tr>
<td>142</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Yemen.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Yemen" title="Yemen">Yemen</a></td>
<td>1,340</td>
<td>2011</td>
</tr>
<tr>
<td>143</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mauritania.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mauritania" title="Mauritania">Mauritania</a></td>
<td>1,290</td>
<td>2011</td>
</tr>
<tr>
<td>144</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Lesotho.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Lesotho" title="Lesotho">Lesotho</a></td>
<td>1,264</td>
<td>2011</td>
</tr>
<tr>
<td>145</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Nicaragua.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Nicaragua" title="Nicaragua">Nicaragua</a></td>
<td>1,239</td>
<td>2011</td>
</tr>
<tr>
<td>146</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cameroon.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Cameroon" title="Cameroon">Cameroon</a></td>
<td>1,230</td>
<td>2011</td>
</tr>
<tr>
<td>147</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Laos.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Laos" title="Laos">Laos</a></td>
<td>1,204</td>
<td>2011</td>
</tr>
<tr>
<td>148</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Pakistan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Pakistan" title="Pakistan">Pakistan</a></td>
<td>1,201</td>
<td>2011</td>
</tr>
<tr>
<td>149</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Senegal.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Senegal" title="Senegal">Senegal</a></td>
<td>1,076</td>
<td>2011</td>
</tr>
<tr>
<td>150</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kyrgyzstan.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></td>
<td>1,070</td>
<td>2011</td>
</tr>
<tr>
<td>151</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cote_d%27Ivoire.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/C%C3%B4te_d%27Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</a></td>
<td>1,062</td>
<td>2011</td>
</tr>
<tr>
<td>152</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Comoros.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Comoros" title="Comoros">Comoros</a></td>
<td>903</td>
<td>2011</td>
</tr>
<tr>
<td>153</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Chad.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Chad" title="Chad">Chad</a></td>
<td>892</td>
<td>2011</td>
</tr>
<tr>
<td>154</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cambodia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Cambodia" title="Cambodia">Cambodia</a></td>
<td>852</td>
<td>2011</td>
</tr>
<tr>
<td>155</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kenya.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kenya" title="Kenya">Kenya</a></td>
<td>851</td>
<td>2011</td>
</tr>
<tr>
<td>156</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Myanmar.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Burma" title="Burma">Burma</a></td>
<td>832</td>
<td>2011</td>
</tr>
<tr>
<td>157</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tajikistan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></td>
<td>831</td>
<td>2011</td>
</tr>
<tr>
<td>158</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Zimbabwe.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Zimbabwe" title="Zimbabwe">Zimbabwe</a></td>
<td>741</td>
<td>2011</td>
</tr>
<tr>
<td>159</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Haiti.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Haiti" title="Haiti">Haiti</a></td>
<td>738</td>
<td>2011</td>
</tr>
<tr>
<td>160</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Benin.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Benin" title="Benin">Benin</a></td>
<td>737</td>
<td>2011</td>
</tr>
<tr>
<td>161</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bangladesh.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bangladesh" title="Bangladesh">Bangladesh</a></td>
<td>678</td>
<td>2011</td>
</tr>
<tr>
<td>162</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mali.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mali" title="Mali">Mali</a></td>
<td>669</td>
<td>2011</td>
</tr>
<tr>
<td>163</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Burkina_Faso.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Burkina_Faso" title="Burkina Faso">Burkina Faso</a></td>
<td>664</td>
<td>2011</td>
</tr>
<tr>
<td>164</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/16px-Flag_of_Nepal.svg.png" width="16" height="20" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Nepal" title="Nepal">Nepal</a></td>
<td>653</td>
<td>2011</td>
</tr>
<tr>
<td>165</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Rwanda.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Rwanda" title="Rwanda">Rwanda</a></td>
<td>605</td>
<td>2011</td>
</tr>
<tr>
<td>166</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Afghanistan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Afghanistan" title="Afghanistan">Afghanistan</a></td>
<td>585</td>
<td>2011</td>
</tr>
<tr>
<td>167</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mozambique.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mozambique" title="Mozambique">Mozambique</a></td>
<td>583</td>
<td>2011</td>
</tr>
<tr>
<td>168</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Guinea-Bissau.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</a></td>
<td>576</td>
<td>2011</td>
</tr>
<tr>
<td>169</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tanzania.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tanzania" title="Tanzania">Tanzania</a></td>
<td>553</td>
<td>2011</td>
</tr>
<tr>
<td>170</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_The_Gambia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/The_Gambia" title="The Gambia">Gambia, The</a></td>
<td>543</td>
<td>2011</td>
</tr>
<tr>
<td>171</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Togo.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Togo" title="Togo">Togo</a></td>
<td>506</td>
<td>2011</td>
</tr>
<tr>
<td>172</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Guinea.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Guinea" title="Guinea">Guinea</a></td>
<td>492</td>
<td>2011</td>
</tr>
<tr>
<td>173</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Uganda.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Uganda" title="Uganda">Uganda</a></td>
<td>478</td>
<td>2011</td>
</tr>
<tr>
<td>174</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Eritrea.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Eritrea" title="Eritrea">Eritrea</a></td>
<td>475</td>
<td>2011</td>
</tr>
<tr>
<td>175</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Madagascar.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Madagascar" title="Madagascar">Madagascar</a></td>
<td>459</td>
<td>2011</td>
</tr>
<tr>
<td>176</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Central_African_Republic.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Central_African_Republic" title="Central African Republic">Central African Republic</a></td>
<td>456</td>
<td>2011</td>
</tr>
<tr>
<td>177</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Niger.svg.png" width="22" height="19" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Niger" title="Niger">Niger</a></td>
<td>399</td>
<td>2011</td>
</tr>
<tr>
<td>178</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sierra_Leone.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Sierra_Leone" title="Sierra Leone">Sierra Leone</a></td>
<td>366</td>
<td>2011</td>
</tr>
<tr>
<td>179</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ethiopia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Ethiopia" title="Ethiopia">Ethiopia</a></td>
<td>360</td>
<td>2011</td>
</tr>
<tr>
<td>180</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Malawi.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Malawi" title="Malawi">Malawi</a></td>
<td>351</td>
<td>2011</td>
</tr>
<tr>
<td>181</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Liberia.svg.png" width="22" height="12" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Liberia" title="Liberia">Liberia</a></td>
<td>298</td>
<td>2011</td>
</tr>
<tr>
<td>182</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Burundi.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Burundi" title="Burundi">Burundi</a></td>
<td>279</td>
<td>2011</td>
</tr>
<tr>
<td>183</td>
<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Democratic_Republic_of_the_Congo.svg.png" width="22" height="17" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Democratic_Republic_of_the_Congo" title="Democratic Republic of the Congo">Congo, Democratic Republic of the</a></td>
<td>216</td>
<td>2011</td>
</tr>
</table>

<cite>
<i>
* List of countries by GDP per capita from <a target="_blank" href="http://en.wikipedia.org/wiki/List_of_countries_by_GDP_(nominal)_per_capita">Wikipedia</a>
</i>
</cite>


</div>




<script type="text/javascript">
  $('#example-table').dynatable({
    features: {
      pushState: true
    },
    readers: {
      'rank': function(el, record) {
        return Number(el.innerHTML) || 0;
      }, 
      'us-$': function(el, record) {
        return Number(el.innerHTML.replace(/,/g, ''));
      }
    },
    writers: {
      'rank': function(record) {
        return record['rank'] ? record['rank'].toString() : '-';
      }, 
      'us-$': function(record) {
        return record['us-$'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      }
    }
  });
</script>


<p>To get started, simply install jquery.dynatable.js (along with jQuery),
and add the following in the <code>document.ready</code> or after the table:</p>

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#my-table&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">();</span>
</code></pre></div>


<h2>How it works</h2>

<p>Dynatable does three things:</p>

<div class="row-fluid">
<div class="span5 how-it-works-col">
<img id="how-it-works" src="https://s3.amazonaws.com/dynatable-docs-assets/images/dynatable-how-it-works-thin.png" />
</div>
<div class="span7 how-it-works-col">
<ol>
<li>
<h4>Read / Normalize</h4>
<p>
The HTML table is scanned and normalized into an array of JSON
objects (or collection) where each JSON object (or record) corresponds to a row in the
table.
</p>
</li>
<li>
<h4>Operate</h4>
<p>
The JSON collection can be sorted, searched/filtered, and
paginated/sliced.
</p>
</li>
<li>
<h4>Write / Render</h4>
<p>
The results of the Operate step are rendered back to the DOM in the body
of the table.
</p>
</li>
</ol>

<p>
This 3-step approach has several advantages:
</p>

<ul>
<li>
<h4>Efficient reading/operating/writing</h4>
<p>
Since the logic and operations occur on the JSON collection, the
DOM operations (reading and writing/drawing) are grouped together, making
interactions quick and efficient.
</p>
</li>
<li>
<h4>Operations are simple JavaScript</h4>
<p>
An operation is simply a function that acts on the normalized JSON collection; sorting, filtering, and
paginating are straight forward in JavaScript.
</p>
<p>
The built-in functions are easy to augment with your
own custom sorting and querying functions.
</p>
</li>
<li>
<h4>Steps can be customized, swapped or skipped</h4>
<p>
Since the normalization, operation, and rendering modules are separated,
each can easily be customized, replaced, or skipped.
</p>
<p>
Already have a JSON API to work with? Skip the Read step. Want to add
paginating, filtering, and sorting to a chart? Customize the Render step.
</li>
</ul>
</div>
</div>


<h2>Normalization</h2>

<p>The first module normalizes an HTML table into a JSON collection.
Dynatable names the attributes of each record according to the table
heading, so that the JSON collection is human-readable and easy to work with.</p>

<div class="side-by-side left">
<p>
The following table:
</p>


<div class="highlight"><pre><code class="html"><span class="nt">&lt;table&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Hobby<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Favorite Music<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;</span>Fred<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Roller Skating<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Disco<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;</span>Helen<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Rock Climbing<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Alternative<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;</span>Glen<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Traveling<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Classical<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>

</div>




<div class="side-by-side right">
<p>
Results in this JSON collection:
</p>


<div class="highlight"><pre><code class="js"><span class="p">[</span>
  <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="o">:</span> <span class="s2">&quot;Fred&quot;</span><span class="p">,</span>
    <span class="s2">&quot;hobby&quot;</span><span class="o">:</span> <span class="s2">&quot;Roller Skating&quot;</span><span class="p">,</span>
    <span class="s2">&quot;favoriteMusic&quot;</span><span class="o">:</span> <span class="s2">&quot;Disco&quot;</span>
  <span class="p">},</span>
  <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="o">:</span> <span class="s2">&quot;Helen&quot;</span><span class="p">,</span>
    <span class="s2">&quot;hobby&quot;</span><span class="o">:</span> <span class="s2">&quot;Rock Climbing&quot;</span><span class="p">,</span>
    <span class="s2">&quot;favoriteMusic&quot;</span><span class="o">:</span> <span class="s2">&quot;Alternative&quot;</span>
  <span class="p">},</span>
  <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="o">:</span> <span class="s2">&quot;Glen&quot;</span><span class="p">,</span>
    <span class="s2">&quot;hobby&quot;</span><span class="o">:</span> <span class="s2">&quot;Traveling&quot;</span><span class="p">,</span>
    <span class="s2">&quot;favoriteMusic&quot;</span><span class="o">:</span> <span class="s2">&quot;Classical&quot;</span>
  <span class="p">}</span>
<span class="p">]</span>
</code></pre></div>

</div>


<p><br class="clear" /></p>

<h3>Converting attribute names</h3>

<p>By default, dynatable converts headings to JSON attribute names using:</p>

<div class="row-fluid">
<div class="span6">
<table class="table table-bordered">
<tr>
<th>Style</th><th>Example</th>
</tr>
<tr><td><code>camelCase</code> (default)</td><td><code>favoriteMusic</code></td><tr>
<tr><td><code>trimDash</code></td><td><code>Favorite-Music</code></td></tr>
<tr><td><code>dashed</code></td><td><code>favorite-music</code></td></tr>
<tr><td><code>underscore</code></td><td><code>favorite_music</code></td></tr>
<tr><td><code>lowercase</code></td><td><code>favorite music</code></td></tr>
</table>
</div>

<div class="span6 no-margin-pre">

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#my-table&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
  <span class="nx">table</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">defaultColumnIdStyle</span><span class="o">:</span> <span class="s1">&#39;trimDash&#39;</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>

</div>
</div>




<div class="row-fluid">
<div class="span4 no-margin-pre">

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">.</span><span class="nx">dynatableSetup</span><span class="p">({</span>
  <span class="nx">table</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">defaultColumnIdStyle</span><span class="o">:</span> <span class="s1">&#39;underscore&#39;</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>

</div>

<div class="span8">
<div class="alert alert-block">
PROTIP: When using dynatable in a Rails application, set the global
style to <code>underscore</code>, matching the Rails parameter and input
field naming conventions. This is useful when getting the JSON data via
AJAX from Rails, or when connecting dynatable events with form inputs on the page).
</div>
</div>
</div>


<p>We could also define our own column-name transformation function.
Consider the following table with these column headings:</p>

<div id="text-transform-example-container">
<table id="text-transform-example" class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Hobby</th>
      <th>Favorite Music</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Fred</td>
      <td>Roller Skating</td>
      <td>Disco</td>
    </tr>
    <tr>
      <td>Helen</td>
      <td>Rock Climbing</td>
      <td>Alternative</td>
    </tr>
    <tr>
      <td>Glen</td>
      <td>Traveling</td>
      <td>Classical</td>
    </tr>
  </tbody>
</table>
</div>


<p>We can set up our own function for transforming column labels to JSON
property names of our desired custom format when we instantiate
dynatable on the table above:</p>

<div class="row-fluid">
<div class="span8 no-margin-pre">
<pre id="text-transform-function" contenteditable>
$('#text-transform-example').bind('dynatable:preinit', function(e, dynatable) {
  dynatable.utility.textTransform.myNewStyle = function(text) {
    return text
             .replace(/\s+/, '_')
             .replace(/[A-Z]/, function($1){ return $1 + $1 });
  };
}).dynatable({
  table: {
    defaultColumnIdStyle: 'myNewStyle'
  },
  features: {
    paginate: false,
    search: false,
    recordCount: false,
    perPageSelect: false
  }
});
</pre>
</div>

<div class="span4">
<div class="alert alert-box">
You may edit the code to the left to experiment with different
custom text-transform functions.
</div>
</div>
</div>




<div class="side-by-side left no-margin-pre">
<pre id="text-transform-result">
Click the button to the right.
Do it!
</pre>
</div>




<div class="side-by-side right">
<p>
<a href="#" id="text-transform-button" class="btn primary">Run Code</a>
</p>

<p>
Click this button to run the code above, populating the box
on the left with the resulting JSON collection built by dynatable.
</p>
</div>




<script>
(function() {
  var $container = $('#text-transform-example-container'),
      origTableHtml = $container.html();

  $(document).delegate('#text-transform-button', 'click', function(e) {
    e.preventDefault();
    $container.html(origTableHtml);

    // Ahhhh, difficult... to... type... this...
    eval($('#text-transform-function').html());

    var dynatable = $('#text-transform-example').data('dynatable');
    $('#text-transform-result').html(JSON.stringify(dynatable.settings.dataset.records, null, 2));
  });
})();
</script>


<p><br class="clear" /></p>

<p>Sometimes, we need columns with labels different than the record
attribute name. If a column heading contains the <code>data-dynatable-column</code>
attribute, the associated record attribute will be named by that value.</p>

<div class="side-by-side left">
<p>
So this:
</p>


<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">id=</span><span class="s">&quot;my-final-table&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;th</span> <span class="na">data-dynatable-column=</span><span class="s">&quot;name&quot;</span><span class="nt">&gt;</span>Band<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th&gt;</span>Hit<span class="nt">&lt;/th&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    ...
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>

</div>




<div class="side-by-side right">
<p>
Would result in:
</p>


<div class="highlight"><pre><code class="js"><span class="p">[</span>
  <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="o">:</span> <span class="p">...,</span>
    <span class="s2">&quot;song&quot;</span><span class="o">:</span> <span class="p">...</span>
  <span class="p">},</span>
  <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="o">:</span> <span class="p">...,</span>
    <span class="s2">&quot;song&quot;</span><span class="o">:</span> <span class="p">...</span>
  <span class="p">}</span>
<span class="p">]</span>
</code></pre></div>

</div>


<p><br class="clear" /></p>

<p>The default behavior makes it easy to make an existing HTML table
dynamic. But we're not limited to reading tables.</p>

<h3>Existing JSON</h3>

<p>Perhaps we already have our data in JSON format. We can
skip the initial record normalization by setting up an empty table for
rendering and directly passing our data into dynatable:</p>

<div class="side-by-side left">

<p>
HTML table to render records:
</p>


<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">id=</span><span class="s">&quot;my-final-table&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;th&gt;</span>Band<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th&gt;</span>Song<span class="nt">&lt;/th&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>


<div class="alert alert-block">
Of course we could just code the json data directly in our JavaScript on
the right, but what's the fun in that?
As a bonus, edit the JSON data to the right and watch the data in the table
update in real-time. &#8594;
</div>

</div>




<div class="side-by-side right">
<p>
This is a <code>pre#json-records</code> element:
</p>

<pre id="json-records" contenteditable>
[
  {
    "band": "Weezer",
    "song": "El Scorcho"
  },
  {
    "band": "Chevelle",
    "song": "Family System"
  }
]
</pre>

<div class="highlight"><pre><code class="js"><span class="kd">var</span> <span class="nx">$records</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#json-records&#39;</span><span class="p">),</span>
    <span class="nx">myRecords</span> <span class="o">=</span> <span class="nx">JSON</span><span class="p">.</span><span class="nx">parse</span><span class="p">(</span><span class="nx">$records</span><span class="p">.</span><span class="nx">text</span><span class="p">());</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#my-final-table&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
  <span class="nx">dataset</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">records</span><span class="o">:</span> <span class="nx">myRecords</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>

</div>


<p><br class="clear" /></p>

<table id="my-final-table" class="table table-bordered">
  <thead>
    <th>Band</th>
    <th>Song</th>
  </thead>
  <tbody>
  </tbody>
</table>




<script>
(function() {
  var $records = $('#json-records'),
      myRecords = JSON.parse($records.text());
  var dynatable = $('#my-final-table').dynatable({
    dataset: {
      records: myRecords
    }
  }).data('dynatable');

  $records.bind('input', function() {
    try {
      var json = JSON.parse($(this).text());
      $records.removeClass('error');

      dynatable.settings.dataset.originalRecords = json;
      dynatable.process();
    } catch(e) {
      $records.addClass('error');
    }
  });
})();
</script>


<h3>JSON from AJAX</h3>

<p>Or maybe, we want to fetch the data via AJAX:</p>

<div class="side-by-side left">

<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">id=</span><span class="s">&quot;my-ajax-table&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;th&gt;</span>Some Attribute<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;th&gt;</span>Some Other Attribute<span class="nt">&lt;/th&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>

</div>




<div class="side-by-side right">

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#my-ajax-table&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
  <span class="nx">dataset</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">ajax</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span>
    <span class="nx">ajaxUrl</span><span class="o">:</span> <span class="s1">&#39;/dynatable-ajax.json&#39;</span><span class="p">,</span>
    <span class="nx">ajaxOnLoad</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span>
    <span class="nx">records</span><span class="o">:</span> <span class="p">[]</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>


<p>
<a href="/dynatable-ajax.json"><i class="icon-share"></i> View AJAX data</a>
</p>

</div>


<p><br class="clear" /></p>

<div class="alert alert-block">
NOTE: When using AJAX to load data, operations such as sorting,
searching, and paginating are performed on the server before building
the returned JSON. This example has these features disabled since,
we're just loading a static JSON file for the purposes of documentation.
</div>




<table id="my-ajax-table" class="table table-bordered">
  <thead>
    <th>Some Attribute</th>
    <th>Some Other Attribute</th>
  </thead>
  <tbody>
  </tbody>
</table>




<script>
$('#my-ajax-table').dynatable({
  features: {
    paginate: false,
    sort: false,
    search: false,
    perPageSelect: false
  },
  dataset: {
    ajax: true,
    ajaxUrl: '/dynatable-ajax.json',
    ajaxOnLoad: true,
    records: []
  }
});
</script>


<p>When using Dynatable in "AJAX mode" (<code>dataset.ajax = true</code>), delegates all operations
(pagination, sorting, and querying/filtering) to the server. For each
operation, dynatalbe culls the parameters (sort, search, page) into an
AJAX request and fetches the results from <code>dataset.ajaxUrl</code> (if this
setting isn't set, it will send an AJAX request to the URL of the
current page).</p>

<p>AJAX mode is intended to be used when you want the server to look
up the records only as needed. This generally means your server is
looking up the records from a database using the database's query,
limit, and offset functions to select the appropriate subset of
records.</p>

<p>Because your server is only ever returning a subset of the records at a
time to Dynatable, the response must contain some extra meta-data. The
following format is the default format expected by Dynatable.</p>

<div class="side-by-side left">

<div class="highlight"><pre><code class="js"><span class="p">{</span>
  <span class="s2">&quot;records&quot;</span><span class="o">:</span> <span class="p">[</span>
    <span class="p">{</span>
      <span class="s2">&quot;someAttribute&quot;</span><span class="o">:</span> <span class="s2">&quot;I am record one&quot;</span><span class="p">,</span>
      <span class="s2">&quot;someOtherAttribute&quot;</span><span class="o">:</span> <span class="s2">&quot;Fetched by AJAX&quot;</span>
    <span class="p">},</span>
    <span class="p">{</span>
      <span class="s2">&quot;someAttribute&quot;</span><span class="o">:</span> <span class="s2">&quot;I am record two&quot;</span><span class="p">,</span>
      <span class="s2">&quot;someOtherAttribute&quot;</span><span class="o">:</span> <span class="s2">&quot;Cuz it&#39;s awesome&quot;</span>
    <span class="p">},</span>
    <span class="p">{</span>
      <span class="s2">&quot;someAttribute&quot;</span><span class="o">:</span> <span class="s2">&quot;I am record three&quot;</span><span class="p">,</span>
      <span class="s2">&quot;someOtherAttribute&quot;</span><span class="o">:</span> <span class="s2">&quot;Yup, still AJAX&quot;</span>
    <span class="p">}</span>
  <span class="p">],</span>
  <span class="s2">&quot;queryRecordCount&quot;</span><span class="o">:</span> <span class="mi">3</span><span class="p">,</span>
  <span class="s2">&quot;totalRecordCount&quot;</span><span class="o">:</span> <span class="mi">3</span>
<span class="p">}</span>
</code></pre></div>

</div>




<div class="side-by-side right">
<p>
If you instead want to fetch all records from the server at once via
AJAX, you may consider leaving AJAX mode off, fetching the records, and
calling Dynatable with the normal JSON recordset returned by the server:
</p>


<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">.</span><span class="nx">ajax</span><span class="p">({</span>
  <span class="nx">url</span><span class="o">:</span> <span class="s1">&#39;ajax_data.json&#39;</span><span class="p">,</span>
  <span class="nx">success</span><span class="o">:</span> <span class="kd">function</span><span class="p">(</span><span class="nx">data</span><span class="p">){</span>
    <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#my-final-table&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
      <span class="nx">dataset</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">records</span><span class="o">:</span> <span class="nx">data</span>
      <span class="p">}</span>
    <span class="p">});</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>

</div>


<p><br class="clear" /></p>

<h3>Lists and non-Tables</h3>

<p>Or maybe we do need the normalization step, but we want to read the
data from an unordered list instead of a table:</p>

<p>We can use the <code>table</code>
settings to configure such awesomeness. We'll use the
<code>table.bodyRowSelector</code> setting to tell dynatable to use <code>li</code> elements
as record rows instead of the default <code>tr</code> elements, and we'll use the
<code>writers._rowWriter</code> setting to tell dynatable how to process each <code>li</code>
into a JSON record object.</p>

<p>Dynatable will call the <code>readers._rowReader</code>
function once for each record in the <code>table.bodyRowSelector</code> collection,
and pass it the current count index, the DOM element, and the JSON
record. This allows full control over which data in the DOM maps to
which data in the JSON:</p>

<p><em>NOTE: We'll also need a <code>readers._rowWriter</code> function to tell
dynatable how to write the JSON records back to the page, but we'll get
to that in the Render section.</em></p>

<div class="side-by-side left">
<p>
The following HTML:
</p>


<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">id=</span><span class="s">&quot;my-list&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;name&quot;</span><span class="nt">&gt;</span>Fender Custom Esquire GT<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;type&quot;</span><span class="nt">&gt;</span>Guitar<span class="nt">&lt;/span&gt;</span>
    $<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;price&quot;</span><span class="nt">&gt;</span>450.00<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;name&quot;</span><span class="nt">&gt;</span>ESP LTD B4-E<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;type&quot;</span><span class="nt">&gt;</span>Bass<span class="nt">&lt;/span&gt;</span>
    $<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;price&quot;</span><span class="nt">&gt;</span>400.00<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>


<p>
And JavaScript:
</p>


<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#my-list&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
  <span class="nx">table</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">bodyRowSelector</span><span class="o">:</span> <span class="s1">&#39;li&#39;</span><span class="p">,</span>
    <span class="nx">rowReader</span><span class="o">:</span> <span class="kd">function</span><span class="p">(</span><span class="nx">index</span><span class="p">,</span> <span class="nx">li</span><span class="p">,</span> <span class="nx">record</span><span class="p">)</span> <span class="p">{</span>
      <span class="kd">var</span> <span class="nx">$li</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="nx">li</span><span class="p">);</span>
      <span class="nx">record</span><span class="p">.</span><span class="nx">name</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.name&#39;</span><span class="p">).</span><span class="nx">text</span><span class="p">();</span>
      <span class="nx">record</span><span class="p">.</span><span class="nx">type</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.type&#39;</span><span class="p">).</span><span class="nx">text</span><span class="p">();</span>
      <span class="nx">record</span><span class="p">.</span><span class="nx">price</span> <span class="o">=</span> <span class="nb">parseFloat</span><span class="p">(</span><span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.price&#39;</span><span class="p">).</span><span class="nx">text</span><span class="p">());</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>

</div>




<div class="side-by-side right">
<p>
Will result in the following JSON:
</p>


<div class="highlight"><pre><code class="js"><span class="p">[</span>
  <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="o">:</span> <span class="s2">&quot;Fender Custom Esquire GT&quot;</span><span class="p">,</span>
    <span class="s2">&quot;type&quot;</span><span class="o">:</span> <span class="s2">&quot;Guitar&quot;</span><span class="p">,</span>
    <span class="s2">&quot;price&quot;</span><span class="o">:</span> <span class="mf">450.0</span>
  <span class="p">},</span>
  <span class="p">{</span>
    <span class="s2">&quot;name&quot;</span><span class="o">:</span> <span class="s2">&quot;ESP LTD B4-E&quot;</span><span class="p">,</span>
    <span class="s2">&quot;type&quot;</span><span class="o">:</span> <span class="s2">&quot;Bass&quot;</span><span class="p">,</span>
    <span class="s2">&quot;price&quot;</span><span class="o">:</span> <span class="mf">400.0</span>
  <span class="p">}</span>
<span class="p">]</span>
</code></pre></div>

</div>


<p><br class="clear" /></p>

<h2>Operations</h2>

<p>Once we have our JSON dataset, we can perform all our interactive and
dynamic logic directly on the JSON using JavaScript. By default,
dynatable comes with functions for sorting, filtering (aka searching), and paginating.</p>

<p>By default, dynatable performs all operations on the JSON record
collection in the page. However, if <code>dataset.ajax</code> is enabled, dynatable
simply passes the operations (pagination, queries, and sort
columns) as parameters to the AJAX URL, thereby delegating the logic to
your server-side code.</p>

<p>The parameter names for pushState and AJAX requests can be customized in
the <code>params</code> configuration settings for dynatable.</p>

<h3>Sorting</h3>

<p>Dynatable allows for single or multi-column, smart sorting out of the
box.</p>

<p>Dynatable can be made aware of the value types of each column, or record
property, so that e.g. dates and numbers are sorted properly (plain-text
sorting would cause February to come before January, and 10 to come
before 2). By default, if dynatable detects HTML code within the value
of a record (such as an <code>img</code> tag, it will automatically sort and search
based on the text-equivalent value of the cell, so sorting won't be
affected by HTML tags or attributes).</p>

<h4>Basic Sorting</h4>

<p>Click the header rows below to sort by each column. Click a header once
for ascending, again for descending, and again to stop sorting by that
column.</p>

<p>Hold shift and click a second row to add secondary sorting, and so on.</p>

<div class="dynatable-demo">
<table id="sorting-example" class="table table-bordered">
  <thead>
    <tr>
      <th>Make</th>
      <th>Model</th>
      <th>Year</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img alt="B won't affect sorting" src="https://s3.amazonaws.com/dynatable-docs-assets/images/vw-icon.png" /> Volkswagen</td>
      <td>Jetta Wolfsburg</td>
      <td>2008</td>
      <td>11,000</td>
    </tr>
    <tr>
      <td><img alt="C won't affect sorting" src="https://s3.amazonaws.com/dynatable-docs-assets/images/ford-icon.png" /> Ford</td>
      <td>Focus</td>
      <td>2013</td>
      <td>20,000</td>
    </tr>
    <tr>
      <td><img src="https://s3.amazonaws.com/dynatable-docs-assets/images/ford-icon.png" /> Ford</td>
      <td>Escape</td>
      <td>2001</td>
      <td>4,000</td>
    </tr>
    <tr>
      <td><img alt="A won't affect sorting" src="https://s3.amazonaws.com/dynatable-docs-assets/images/mini-icon.png" /> Mini</td>
      <td>Cooper</td>
      <td>2001</td>
      <td>8,500</td>
    </tr>
    <tr>
      <td><img src="https://s3.amazonaws.com/dynatable-docs-assets/images/ford-icon.png" /> Ford</td>
      <td>Focus SVT</td>
      <td>2003</td>
      <td>9,000</td>
    </tr>
  </tbody>
</table>
</div>




<script>
  $('#sorting-example').dynatable({
    features: {
      paginate: false,
      search: false,
      recordCount: false
    },
    dataset: {
      sorts: { year: 1 }
    },
    readers: {
      'price': function(el, record) {
        return Number(el.innerHTML.replace(/,/g, ''));
      }
    },
    writers: {
      'price': function(record) {
        return record.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      }
    }
});
</script>


<p>In the example above, we run the "Price" column values through an
"reader" function which returns a JavaScript <code>Number</code> and parses out
the comma seperator. Likewise, we then run it through a rendering "writer"
which re-inserts the comma when rendering the number back to the DOM.</p>

<h4>Sort by Another Value</h4>

<p>Sometimes, we need one column to sort based on some other attribute.
For example, maybe we have a column which needs to sort on another
hidden column. We can use the <code>data-dynatable-sorts</code> attribute on the
column header to let dynatable know.</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;table</span> <span class="na">id=</span><span class="s">&quot;sorting-example&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">data-dynatable-sorts=</span><span class="s">&quot;computerYear&quot;</span><span class="nt">&gt;</span>Year<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">style=</span><span class="s">&quot;display: none&quot;</span><span class="nt">&gt;</span>Computer Year<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;</span>Steve<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Two Thousand and Thirteen<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>2013<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>


<p>In the above example, dynatable will detect that the last column heading
is hidden, and will hide all cells under that column, and it will sort
the "Year" column based on the attribute in the last column.</p>

<p>If we have a column we don't want to be sortable, we just add the
<code>data-dynatable-no-sort</code> attribute.</p>

<h4>Custom Sort Functions</h4>

<p>We can also use our own custom sort function. This demo sorts
the "color" column by the average color content in the images, from greenish to bluish to
reddish (using javascript and canvas in our sorting function to evaluate
the color content of each image):</p>

<div class="row-fluid">

<div class="span6">

<div class="dynatable-demo">
<table id="sorting-function-example" class="table table-bordered">
  <thead>
    <tr>
      <th data-dynatable-column="color" data-dynatable-sorts="dec">Sort by Color</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="/rgb_sorting_images/dinosaurs/150px-Cerasinops_BW.jpg" /> Cerasinops</td>
    </tr>
    <tr>
      <td><img src="/rgb_sorting_images/dinosaurs/150px-Ceratosaurus_sketch2.jpg" /> Ceratosaurus</td>
    </tr>
    <tr>
      <td><img src="/rgb_sorting_images/dinosaurs/150px-Allosaurus_BW.jpg" /> Allosaurus</td>
    </tr>
    <tr>
      <td><img src="/rgb_sorting_images/dinosaurs/150px-Tyrannosaurus_BW.jpg" /> Tyrannosaurus</td>
    </tr>
    <tr>
      <td><img src="/rgb_sorting_images/dinosaurs/150px-Brachylophosaurus-v4.jpg" /> Brachylophosaurus</td>
    </tr>
    <tr>
      <td><img src="/rgb_sorting_images/dinosaurs/Albertaceratops_BW.jpg" /> Albertaceratops</td>
    </tr>
    <tr>
      <td><img src="/rgb_sorting_images/dinosaurs/Utahraptor_BW.jpg" /> Utahraptor</td>
    </tr>
  </tbody>
</table>
</div>

<cite>
<i>
* Images from List of North American dinosaurs from <a target="_blank" href="http://en.wikipedia.org/wiki/List_of_North_American_dinosaurs">Wikipedia</a>
</i>
</cite>

<script>
(function() {
  function getAverageRGB(imgEl) {

    var blockSize = 5, // only visit every 5 pixels
        defaultRGB = {r:0,g:0,b:0}, // for non-supporting envs
        canvas = document.createElement('canvas'),
        context = canvas.getContext && canvas.getContext('2d'),
        data, width, height,
        i = -4,
        length,
        rgb = {r:0,g:0,b:0},
        count = 0;

    if (!context) {
      return defaultRGB;
    }

    height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
    width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;

    context.drawImage(imgEl, 0, 0);

    try {
      data = context.getImageData(0, 0, width, height);
    } catch(e) {
      /* security error, img on diff domain */
      return defaultRGB;
    }

    length = data.data.length;

    while ( (i += blockSize * 4) < length ) {
      // Ignore grayish values
      if ( Math.abs(data.data[i] - data.data[i+1]) > 25 && Math.abs(data.data[i+1] - data.data[i+3]) > 25 ) {
        ++count;
        rgb.r += data.data[i];
        rgb.g += data.data[i+1];
        rgb.b += data.data[i+2];
      }
    }

    // ~~ used to floor values
    rgb.r = ~~(rgb.r/count);
    rgb.g = ~~(rgb.g/count);
    rgb.b = ~~(rgb.b/count);

    return rgb;

  }

  $(window).load(function() {
    $('#sorting-function-example')
      .dynatable({
        features: {
          paginate: false,
          search: false,
          recordCount: false
        },
        readers: {
          color: function(cell, record) {
            var $cell = $(cell),
                rgb = getAverageRGB($cell.find('img').get(0)),
                dec = ( rgb.r << 16 ) + ( rgb.g << 8 ) + rgb.b;
            record['dec'] = dec;
            record['name'] = $cell.text();
            return $cell.html();
          }
        }
      });
  })
})();
</script>
</div>

<div class="span6">
<p>
We may also sort programmatically with the dynatable API. For example,
let's add a button which sorts our table by dinosaur names, and a button
that clears all our sorts, putting the records back in their original
order:
</p>

<p>
<a href="#" class="btn primary" id="sorting-function-example-button">Sort A-Z</a>
<a href="#" class="btn" id="sorting-function-example-clear-button">Clear Sorts</a>
</p>

<script>
(function() {
  $('#sorting-function-example').bind('dynatable:init', function(e, dynatable) {

    $('#sorting-function-example-button').click( function(e) {
      // Clear any existing sorts
      dynatable.sorts.clear();
      dynatable.sorts.add('name', 1) // 1=ASCENDING, -1=DESCENDING
      dynatable.process();
      e.preventDefault();
    });

    $('#sorting-function-example-clear-button').click( function(e) {
      dynatable.sorts.clear();
      dynatable.process();
      e.preventDefault()
    });
  });
})();
</script>

<p>
The code for the buttons above:
</p>


<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#sorting-function-example&#39;</span><span class="p">).</span><span class="nx">bind</span><span class="p">(</span><span class="s1">&#39;dynatable:init&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">,</span> <span class="nx">dynatable</span><span class="p">)</span> <span class="p">{</span>

  <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#sorting-function-example-button&#39;</span><span class="p">).</span><span class="nx">click</span><span class="p">(</span> <span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
    <span class="c1">// Clear any existing sorts</span>
    <span class="nx">dynatable</span><span class="p">.</span><span class="nx">sorts</span><span class="p">.</span><span class="nx">clear</span><span class="p">();</span>
    <span class="nx">dynatable</span><span class="p">.</span><span class="nx">sorts</span><span class="p">.</span><span class="nx">add</span><span class="p">(</span><span class="s1">&#39;name&#39;</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span> <span class="c1">// 1=ASCENDING, -1=DESCENDING</span>
    <span class="nx">dynatable</span><span class="p">.</span><span class="nx">process</span><span class="p">();</span>
    <span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
  <span class="p">});</span>

  <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#sorting-function-example-clear-button&#39;</span><span class="p">).</span><span class="nx">click</span><span class="p">(</span> <span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">dynatable</span><span class="p">.</span><span class="nx">sorts</span><span class="p">.</span><span class="nx">clear</span><span class="p">();</span>
    <span class="nx">dynatable</span><span class="p">.</span><span class="nx">process</span><span class="p">();</span>
    <span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">()</span>
  <span class="p">});</span>
<span class="p">});</span>
</code></pre></div>

</div>
</div>


<p>There are a couple different ways to achieve the custom color sorting above,
and it's useful to explore each way to gain a better understanding of
what's possible.</p>

<h4>Creating a Custom Sort Function</h4>

<p>The first way is to create a custom sort function, add it to dynatable's
list of sort functions in <code>sorts.functions</code>, and then tell dynatable to use that function
when sorting that column.</p>

<p>A sort function takes in the two records being compared (a and b below),
the attribute column currently being sorted, and the direction (1 for
ascending, -1 for descending). The function needs to return a positive
number (if a is higher than b), a negative number (if b is higher than
a), or 0 (if a and b are tied).</p>

<div class="highlight"><pre><code class="js"><span class="c1">// Our custom sort function</span>
<span class="kd">function</span> <span class="nx">rgbSort</span><span class="p">(</span><span class="nx">a</span><span class="p">,</span> <span class="nx">b</span><span class="p">,</span> <span class="nx">attr</span><span class="p">,</span> <span class="nx">direction</span><span class="p">)</span> <span class="p">{</span>

  <span class="c1">// Assuming we&#39;ve created a separate function</span>
  <span class="c1">// to get the average RGB value from an image.</span>
  <span class="c1">// (see source for example above for getAverageRGB function)</span>
  <span class="kd">var</span> <span class="nx">aRgb</span> <span class="o">=</span> <span class="nx">getAverageRGB</span><span class="p">(</span><span class="nx">a</span><span class="p">.</span><span class="nx">img</span><span class="p">),</span>
      <span class="nx">bRgb</span> <span class="o">=</span> <span class="nx">getAverageRGB</span><span class="p">(</span><span class="nx">b</span><span class="p">.</span><span class="nx">img</span><span class="p">),</span>
      <span class="nx">aDec</span> <span class="o">=</span> <span class="p">(</span> <span class="nx">aRgb</span><span class="p">.</span><span class="nx">r</span> <span class="o">&lt;&lt;</span> <span class="mi">16</span> <span class="p">)</span> <span class="o">+</span> <span class="p">(</span> <span class="nx">aRgb</span><span class="p">.</span><span class="nx">g</span> <span class="o">&lt;&lt;</span> <span class="mi">8</span> <span class="p">)</span> <span class="o">+</span> <span class="nx">aRgb</span><span class="p">.</span><span class="nx">b</span><span class="p">,</span>
      <span class="nx">bDec</span> <span class="o">=</span> <span class="p">(</span> <span class="nx">bRgb</span><span class="p">.</span><span class="nx">r</span> <span class="o">&lt;&lt;</span> <span class="mi">16</span> <span class="p">)</span> <span class="o">+</span> <span class="p">(</span> <span class="nx">bRgb</span><span class="p">.</span><span class="nx">g</span> <span class="o">&lt;&lt;</span> <span class="mi">8</span> <span class="p">)</span> <span class="o">+</span> <span class="nx">bRgb</span><span class="p">.</span><span class="nx">b</span><span class="p">,</span>
      <span class="nx">comparison</span> <span class="o">=</span> <span class="nx">aDec</span> <span class="o">-</span> <span class="nx">bDec</span><span class="p">;</span>

  <span class="k">return</span> <span class="nx">direction</span> <span class="o">&gt;</span> <span class="mi">0</span> <span class="o">?</span> <span class="nx">comparison</span> <span class="o">:</span> <span class="o">-</span><span class="nx">comparison</span><span class="p">;</span>
<span class="p">};</span>

<span class="c1">// Wait until images are loaded</span>
<span class="nx">$</span><span class="p">(</span><span class="nb">window</span><span class="p">).</span><span class="nx">load</span><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#sorting-function-example&#39;</span><span class="p">)</span>

    <span class="c1">// Add our custom sort function to dynatable</span>
    <span class="p">.</span><span class="nx">bind</span><span class="p">(</span><span class="s1">&#39;dynatable:init&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">,</span> <span class="nx">dynatable</span><span class="p">)</span> <span class="p">{</span>
      <span class="nx">dynatable</span><span class="p">.</span><span class="nx">sorts</span><span class="p">.</span><span class="nx">functions</span><span class="p">[</span><span class="s2">&quot;rgb&quot;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">rgbSort</span><span class="p">;</span>
    <span class="p">})</span>

    <span class="c1">// Initialize dynatable</span>
    <span class="p">.</span><span class="nx">dynatable</span><span class="p">({</span>
      <span class="nx">features</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">paginate</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
        <span class="nx">search</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
        <span class="nx">recordCount</span><span class="o">:</span> <span class="kc">false</span>
      <span class="p">},</span>
      <span class="nx">dataset</span><span class="o">:</span> <span class="p">{</span>
        <span class="c1">// When we sort on the color column,</span>
        <span class="c1">// use our custom sort added above.</span>
        <span class="nx">sortTypes</span><span class="o">:</span> <span class="p">{</span>
          <span class="nx">color</span><span class="o">:</span> <span class="s1">&#39;rgbSort&#39;</span>
        <span class="p">}</span>
      <span class="p">},</span>
      <span class="nx">readers</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">color</span><span class="o">:</span> <span class="kd">function</span><span class="p">(</span><span class="nx">cell</span><span class="p">,</span> <span class="nx">record</span><span class="p">)</span> <span class="p">{</span>
          <span class="kd">var</span> <span class="nx">$cell</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="nx">cell</span><span class="p">);</span>

          <span class="c1">// Store the average RGB image color value</span>
          <span class="c1">// as a decimal in &quot;dec&quot; attribute.</span>
          <span class="nx">record</span><span class="p">[</span><span class="s1">&#39;img&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">$cell</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;img&#39;</span><span class="p">).</span><span class="nx">get</span><span class="p">(</span><span class="mi">0</span><span class="p">);</span>

          <span class="c1">// Return the HTML of the cell to be stored</span>
          <span class="c1">// as the &quot;color&quot; attribute.</span>
          <span class="k">return</span> <span class="nx">$cell</span><span class="p">.</span><span class="nx">html</span><span class="p">();</span>
        <span class="p">}</span>
      <span class="p">}</span>
    <span class="p">});</span>
<span class="p">})</span>
</code></pre></div>


<p>The sort function gets run between each pair of records to determine
which comes first. This means it gets run <code>n!</code> times (where n is the
number of records), or <code>n-1</code> times for each record.</p>

<p>So, the average RGB
values in this example are being re-computed multiple times for each
record. This kills the efficiency.</p>

<h4>Creating a Custom Attribute to Sort On</h4>

<p>Instead, it's much more efficient to compute values only once for each
record and store them as record attributes. We were already storing the
image file above for each record, so why not go ahead and store the RGB
values too?</p>

<p>Furthermore, notice that in our custom <code>rgbSort</code> function above, after it
calculates the RGB value for each record, it's just doing a standard
number comparison (by subtracting one value from the other). Dynatable
has built-in "number" sorting.</p>

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="nb">window</span><span class="p">).</span><span class="nx">load</span><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#sorting-function-example&#39;</span><span class="p">)</span>

    <span class="c1">// Initialize dynatable</span>
    <span class="p">.</span><span class="nx">dynatable</span><span class="p">({</span>
      <span class="nx">features</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">paginate</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
        <span class="nx">search</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
        <span class="nx">recordCount</span><span class="o">:</span> <span class="kc">false</span>
      <span class="p">},</span>

      <span class="c1">// We have one column, but it contains multiple types of info.</span>
      <span class="c1">// So let&#39;s define a custom reader for that column to grab</span>
      <span class="c1">// all the extra info and store it in our normalized records.</span>
      <span class="nx">readers</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">color</span><span class="o">:</span> <span class="kd">function</span><span class="p">(</span><span class="nx">cell</span><span class="p">,</span> <span class="nx">record</span><span class="p">)</span> <span class="p">{</span>

          <span class="c1">// Inspect the source of this example</span>
          <span class="c1">// to see the getAverageRGB function.</span>
          <span class="kd">var</span> <span class="nx">$cell</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="nx">cell</span><span class="p">),</span>
              <span class="nx">rgb</span> <span class="o">=</span> <span class="nx">getAverageRGB</span><span class="p">(</span><span class="nx">$cell</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;img&#39;</span><span class="p">).</span><span class="nx">get</span><span class="p">(</span><span class="mi">0</span><span class="p">)),</span>
              <span class="nx">dec</span> <span class="o">=</span> <span class="p">(</span> <span class="nx">rgb</span><span class="p">.</span><span class="nx">r</span> <span class="o">&lt;&lt;</span> <span class="mi">16</span> <span class="p">)</span> <span class="o">+</span> <span class="p">(</span> <span class="nx">rgb</span><span class="p">.</span><span class="nx">g</span> <span class="o">&lt;&lt;</span> <span class="mi">8</span> <span class="p">)</span> <span class="o">+</span> <span class="nx">rgb</span><span class="p">.</span><span class="nx">b</span><span class="p">;</span>

          <span class="c1">// Store the average RGB image color value</span>
          <span class="c1">// as a decimal in &quot;dec&quot; attribute.</span>
          <span class="nx">record</span><span class="p">[</span><span class="s1">&#39;dec&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">dec</span><span class="p">;</span>

          <span class="c1">// Grab the dinosaur name.</span>
          <span class="nx">record</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">$cell</span><span class="p">.</span><span class="nx">text</span><span class="p">();</span>

          <span class="c1">// Return the HTML of the cell to be stored</span>
          <span class="c1">// as the &quot;color&quot; attribute.</span>
          <span class="k">return</span> <span class="nx">$cell</span><span class="p">.</span><span class="nx">html</span><span class="p">();</span>
        <span class="p">}</span>
      <span class="p">}</span>
    <span class="p">});</span>
<span class="p">})</span>
</code></pre></div>


<p>We could now create a custom sort function for the "color" column, to make
sure it sorts based on the "dec" attribute instead. Or, we could just tell
dynatable to sort the "color" column based on the "name" attribute
directly in our table with <code>data-dynatable-sorts</code>:</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;table&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">data-dynatable-column=</span><span class="s">&quot;color&quot;</span> <span class="na">data-dynatable-sorts=</span><span class="s">&quot;dec&quot;</span><span class="nt">&gt;</span>Sort by Color<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;&lt;img</span> <span class="na">src=</span><span class="s">&quot;/images/dinosaurs/cerasinops.jpg&quot;</span> <span class="nt">/&gt;</span> Cerasinops<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="c">&lt;!-- ... --&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>


<h3>Querying</h3>

<p>(aka filtering or searching)</p>

<p>In addition to sorting, we can also query the data by some
term or value. By default, dynatable includes a search box which
matches from the plain-text values (case-insensitive) across all attributes of the records.
Try it in the demo at the top of this page, by typing in the search box
above the table and hitting "Enter" or "Tab".</p>

<h4>Custom Query Functions</h4>

<p>Queries can also be added programmatically via JavaScript to be
processed by dynatable. We simply add a query key-value to the
<code>dataset.queries</code> array, where the key matches the JSON record attribute
you'd like to match, and the value is what we're matching.</p>

<p>Below, we'll include the default text search, and
additionally include our own "Year" filter.</p>

<div class="side-by-side left">

<div class="highlight"><pre><code class="html"><span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">&quot;search-year&quot;</span> <span class="na">name=</span><span class="s">&quot;year&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2001<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2003<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2008<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>2013<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>
</code></pre></div>


<div class="alert alert-block">
NOTE: This JS is the long version, to show how customizable queries
are. See below for the easier, built-in way to add your own query
controls. &#8594;
</div>
</div>




<div class="side-by-side right">

<div class="highlight"><pre><code class="js"><span class="kd">var</span> <span class="nx">dynatable</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#search-example&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
  <span class="nx">features</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">paginate</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
    <span class="nx">recordCount</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
    <span class="nx">sorting</span><span class="o">:</span> <span class="kc">false</span>
  <span class="p">}</span>
<span class="p">}).</span><span class="nx">data</span><span class="p">(</span><span class="s1">&#39;dynatable&#39;</span><span class="p">);</span>

<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#search-year&#39;</span><span class="p">).</span><span class="nx">change</span><span class="p">(</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">value</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">).</span><span class="nx">val</span><span class="p">();</span>
  <span class="k">if</span> <span class="p">(</span><span class="nx">value</span> <span class="o">===</span> <span class="s2">&quot;&quot;</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">dynatable</span><span class="p">.</span><span class="nx">queries</span><span class="p">.</span><span class="nx">remove</span><span class="p">(</span><span class="s2">&quot;year&quot;</span><span class="p">);</span>
  <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
    <span class="nx">dynatable</span><span class="p">.</span><span class="nx">queries</span><span class="p">.</span><span class="nx">add</span><span class="p">(</span><span class="s2">&quot;year&quot;</span><span class="p">,</span><span class="nx">value</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="nx">dynatable</span><span class="p">.</span><span class="nx">process</span><span class="p">();</span>
<span class="p">});</span>
</code></pre></div>

</div>


<p><br class="clear" /></p>

<div class="dynatable-demo">
<div id="search-example-year-filter" style="float: left;">
  Year:
  <select id="search-year" name="year">
    <option></option>
    <option>2001</option>
    <option>2003</option>
    <option>2008</option>
    <option>2013</option>
  </select>
</div>

<table id="search-example" class="table table-bordered">
  <thead>
    <tr>
      <th>Make</th>
      <th>Model</th>
      <th>Year</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img alt="B won't affect sorting" src="https://s3.amazonaws.com/dynatable-docs-assets/images/vw-icon.png" /> Volkswagen</td>
      <td>Jetta Wolfsburg</td>
      <td>2008</td>
    </tr>
    <tr>
      <td><img alt="C won't affect sorting" src="https://s3.amazonaws.com/dynatable-docs-assets/images/ford-icon.png" /> Ford</td>
      <td>Focus</td>
      <td>2013</td>
    </tr>
    <tr>
      <td><img src="https://s3.amazonaws.com/dynatable-docs-assets/images/ford-icon.png" /> Ford</td>
      <td>Escape</td>
      <td>2001</td>
    </tr>
    <tr>
      <td><img alt="A won't affect sorting" src="https://s3.amazonaws.com/dynatable-docs-assets/images/mini-icon.png" /> Mini</td>
      <td>Cooper</td>
      <td>2001</td>
    </tr>
    <tr>
      <td><img src="https://s3.amazonaws.com/dynatable-docs-assets/images/ford-icon.png" /> Ford</td>
      <td>Focus SVT</td>
      <td>2003</td>
    </tr>
  </tbody>
</table>
</div>




<script>
(function() {
  var dynatable = $('#search-example').dynatable({
    features: {
      paginate: false,
      recordCount: false,
      sorting: false
    }
  }).data('dynatable');

  $('#search-year').change( function() {
    var value = $(this).val();
    if (value === "") {
      dynatable.queries.remove("year");
    } else {
      dynatable.queries.add("year",value);
    }
    dynatable.process();
  });
})();
</script>


<p>There's a shortcut to the above code; to hook up our own search filters,
we can just pass an array of jQuery selectors which point to our filter
inputs. Instead of binding to our input's change event, adding the
input's value to the queries array and calling the <code>dynatable.process()</code>
function, we could have just done this:</p>

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#search-example&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
  <span class="nx">features</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">paginate</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
    <span class="nx">recordCount</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
    <span class="nx">sorting</span><span class="o">:</span> <span class="kc">false</span>
  <span class="p">},</span>
  <span class="nx">inputs</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">queries</span><span class="o">:</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#search-year&#39;</span><span class="p">)</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>


<p>Doing it this way also hooks the query into the pushState
functionality to update the page URL parameters and cache the query
result for the browser's forward- and back-buttons, and sets the query
event (the JS event that processes the query) to the <code>inputs.queryEvent</code>
setting (which can also be customized per-input via the
<code>data-dynatable-query-event</code> attribute). The key-name for the query will
be set to the <code>data-dynatable-query</code> attribute, the <code>name</code> attribute, or
the <code>id</code> for the input.</p>

<p>Using our own query filters, we may also need something other than
text-matching. Perhaps we want a filter which sets a price range. We can
add our query input with the <code>inputs.queries</code> setting as above, and then
define our own query function for that key.</p>

<p><em>When using our own query function, the query key must match the name of
the query function, rather than the name of a column or record
attribute.</em></p>

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#search-function-example&#39;</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">bind</span><span class="p">(</span><span class="s1">&#39;dynatable:init&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">,</span> <span class="nx">dynatable</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">dynatable</span><span class="p">.</span><span class="nx">queries</span><span class="p">.</span><span class="nx">functions</span><span class="p">[</span><span class="s1">&#39;max-price&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="kd">function</span><span class="p">(</span><span class="nx">record</span><span class="p">,</span> <span class="nx">queryValue</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">return</span> <span class="nb">parseFloat</span><span class="p">(</span><span class="nx">record</span><span class="p">.</span><span class="nx">price</span><span class="p">.</span><span class="nx">replace</span><span class="p">(</span><span class="sr">/,/</span><span class="p">,</span><span class="s1">&#39;&#39;</span><span class="p">))</span> <span class="o">&lt;=</span> <span class="nb">parseFloat</span><span class="p">(</span><span class="nx">queryValue</span><span class="p">);</span>
    <span class="p">};</span>
  <span class="p">})</span>
  <span class="p">.</span><span class="nx">dynatable</span><span class="p">({</span>
    <span class="nx">features</span><span class="o">:</span> <span class="p">{</span>
      <span class="nx">paginate</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
      <span class="nx">recordCount</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
      <span class="nx">sorting</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
      <span class="nx">search</span><span class="o">:</span> <span class="kc">false</span>
    <span class="p">},</span>
    <span class="nx">inputs</span><span class="o">:</span> <span class="p">{</span>
      <span class="nx">queries</span><span class="o">:</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#max-price&#39;</span><span class="p">)</span>
    <span class="p">}</span>
  <span class="p">});</span>
</code></pre></div>


<p>By default, when a query is added, dynatable will first look in the
<code>queries.functions</code> object to find the query function matching the
query's key-name. If none is found, it will fall-back to doing a
plain-text search on the record attribute matching the query key-name.
If that attribute doesn't exist either, then dynatable will throw and
error alerting us to add the function.</p>

<p>The query function is called once for each record and should return
either <code>true</code> or <code>false</code>, letting dynatable know if that record matches
the query or not.</p>

<div class="dynatable-demo">
<div id="search-function-example-price-filter" style="float: left; margin-bottom: 1em;">
  Max Price:
  $<input id="max-price" type=number step=1000 />
</div>
<table id="search-function-example" class="table table-bordered">
  <thead>
    <tr>
      <th>Make</th>
      <th>Model</th>
      <th>Year</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Volkswagen</td>
      <td>Jetta Wolfsburg</td>
      <td>2008</td>
      <td>11,000</td>
    </tr>
    <tr>
      <td>Ford</td>
      <td>Focus</td>
      <td>2013</td>
      <td>20,000</td>
    </tr>
    <tr>
      <td>Ford</td>
      <td>Escape</td>
      <td>2001</td>
      <td>4,000</td>
    </tr>
    <tr>
      <td>Mini</td>
      <td>Cooper</td>
      <td>2001</td>
      <td>8,500</td>
    </tr>
    <tr>
      <td>Ford</td>
      <td>Focus SVT</td>
      <td>2003</td>
      <td>9,000</td>
    </tr>
  </tbody>
</table>
</div>




<script>
(function() {
  $('#search-function-example')
    .bind('dynatable:init', function(e, dynatable) {
      dynatable.queries.functions['max-price'] = function(record, queryValue) {
        return parseFloat(record.price.replace(/,/,'')) <= parseFloat(queryValue);
      };
    })
    .dynatable({
      features: {
        paginate: false,
        recordCount: false,
        sorting: false,
        search: false
      },
      inputs: {
        queries: $('#max-price')
      }
    });
})();
</script>


<h3>Paginating</h3>

<p>Dynatable also provides pagination by default, by selecting a specific
slice of the JSON record collection to render to the page, and adding
page selection links to the table, as well as a drop-down allowing the
user to select how many records are shown per page.</p>

<p>In other words, dynatable is aware
that the currently rendered records in the DOM may only be a subset of
the total records.</p>

<p>We can customize the default number of records displayed per page via
the <code>dataset.perPageDefault</code> configuration setting. And we can customize the
per-page options via the <code>dataset.perPageOptions</code> configuration setting.</p>

<p>We can also set the page and perPage values via the dynatable API:</p>

<div class="highlight"><pre><code class="js"><span class="kd">var</span> <span class="nx">dynatable</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#my-table&#39;</span><span class="p">).</span><span class="nx">data</span><span class="p">(</span><span class="s1">&#39;dynatable&#39;</span><span class="p">);</span>
<span class="nx">dynatable</span><span class="p">.</span><span class="nx">paginationPerPage</span><span class="p">.</span><span class="nx">set</span><span class="p">(</span><span class="mi">20</span><span class="p">);</span> <span class="c1">// Show 20 records per page</span>
<span class="nx">dynatable</span><span class="p">.</span><span class="nx">paginationPage</span><span class="p">.</span><span class="nx">set</span><span class="p">(</span><span class="mi">5</span><span class="p">);</span> <span class="c1">// Go to page 5</span>
<span class="nx">dynatable</span><span class="p">.</span><span class="nx">process</span><span class="p">();</span>
</code></pre></div>


<p>If <code>dataset.ajax</code> is enabled, then the page and per-page parameters are
simply passed to the server.</p>

<h3>Record Count</h3>

<p>When pagination is enabled, dynatable will also show the currently
displayed records and the total number of records in the form:</p>

<div class="highlight"><pre><code class="smarty"><span class="x">Showing </span><span class="cp">{</span><span class="nf">x</span><span class="cp">}</span><span class="x"> to </span><span class="cp">{</span><span class="nf">y</span><span class="cp">}</span><span class="x"> out of </span><span class="cp">{</span><span class="nf">z</span><span class="cp">}</span><span class="x"> records</span>
</code></pre></div>


<p>This message can be customized via the <code>dataset.recordCountText</code>
configuration, and the <code>params.records</code> configuration. The text
displayed on the table is of the form:</p>

<div class="highlight"><pre><code class="smarty"><span class="cp">{</span><span class="nf">dataset</span><span class="o">.</span><span class="na">recordCountText</span><span class="cp">}</span><span class="x"> </span><span class="cp">{</span><span class="nf">x</span><span class="cp">}</span><span class="x"> to </span><span class="cp">{</span><span class="nf">y</span><span class="cp">}</span><span class="x"> out of </span><span class="cp">{</span><span class="nf">z</span><span class="cp">}</span><span class="x"> </span><span class="cp">{</span><span class="nf">params</span><span class="o">.</span><span class="na">records</span><span class="cp">}</span><span class="x"></span>
</code></pre></div>


<p>Dynatable will also show the queried and total record counts when
querying data, in the form:</p>

<div class="highlight"><pre><code class="smarty"><span class="x">Showing </span><span class="cp">{</span><span class="nf">x</span><span class="cp">}</span><span class="x"> of </span><span class="cp">{</span><span class="nf">y</span><span class="cp">}</span><span class="x"> records (filtered from </span><span class="cp">{</span><span class="nf">z</span><span class="cp">}</span><span class="x"> total records)</span>
</code></pre></div>


<p>Or more accurately:</p>

<div class="highlight"><pre><code class="smarty"><span class="cp">{</span><span class="nf">dataset</span><span class="o">.</span><span class="na">recordCountText</span><span class="cp">}</span><span class="x"> </span><span class="cp">{</span><span class="nf">x</span><span class="cp">}</span><span class="x"> of </span><span class="cp">{</span><span class="nf">y</span><span class="cp">}</span><span class="x"> </span><span class="cp">{</span><span class="nf">params</span><span class="o">.</span><span class="na">records</span><span class="cp">}</span><span class="x"> (filtered from </span><span class="cp">{</span><span class="nf">z</span><span class="cp">}</span><span class="x"> total </span><span class="cp">{</span><span class="nf">params</span><span class="o">.</span><span class="na">records</span><span class="cp">}</span><span class="x">)</span>
</code></pre></div>


<p>When <code>dataset.ajax</code> is enabled, in order for dynatable to display this
message, our server must return
the number of total records in addition to the sliced record set for the
current page. By default, dynatable looks for the total number of
records in the <code>responseJSON.totalRecordCount</code> attribute.</p>

<h3>PushState</h3>

<p>Dynatable uses HTML5's pushState to store operation results (sorting,
querying and paginating) and update the browser's URL, so that we may
hit the browser's back- and forward-buttons to step through our
interactions with the table.</p>

<p>If the resulting data can be stored in the browser's
pushState cache, then it will be, and dynatable will simply render the
cached data for that step rather than re-running the (potentially
complex) operations. If <code>dataset.ajax</code> is enabled, then dynatable will
render the pushState-cached results rather than re-submitting the AJAX
request to the server.</p>

<p>If the resulting dataset for a given operation is too large for the
pushState cache, then dynatable will automatically fallback to
re-running the operations or re-sending the AJAX request to the server.</p>

<div class="alert alert-block">
  PushState works in <a href="http://caniuse.com/#search=pushstate"
target=_blank>all modern browsers that support it</a>. For other
browsers (IE9 or earlier), a pushState polyfill such as
<a href="https://github.com/browserstate/history.js" target=_blank>History.js</a>
may be used.
</div>


<h3>Processing Indicator</h3>

<p>For long-running operations (and for AJAX tables which must request data
form the server), dynatable automatically appends a "processing"
indicator to the table to let users know something is happening. We can
style this indicator however we want. By default, it's just the word
"Processing..." overlaid in the center of the table.</p>

<p>We can customize the html content of the processing indicator (including
images or gifs), using the <code>inputs.processingText</code>
configuration.</p>

<p>We can also style the processing indicator overlay and inner block, by
attaching styles to the
<code>dynatable-processing</code> class and the <code>.dynatable-processing span</code>
CSS selector, respectively.</p>

<div class="row-fluid">
<div class="span6">
<div class="dynatable-demo">
<table id="processing-indicator-example" class="table table-bordered">
  <thead>
    <tr>
      <th>Important Things</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>E=MC<sup>2</sup></td>
    </tr>
    <tr>
      <td>F=MA</td>
    </tr>
    <tr>
      <td>A<sup>2</sup>+B<sup>2</sup>=C<sup>2</sup></td>
    </tr>
  </tbody>
</table>
</div>

<script>
(function() {
  $('#processing-indicator-example')
    .bind('dynatable:init', function(e, dynatable) {
      dynatable.sorts.functions['long-sort'] = function(a, b, attr, ascending) {
        for (var i=0; i < 10000; i++) {
          // Woo!
        }
        return dynatable.sorts.functions.string(a, b, attr, ascending);
      };
    })
    .dynatable({
      features: {
        paginate: false,
        search: false,
        recordCount: false,
        pushState: false
      },
      dataset: {
        sortTypes: {
          importantThings: 'long-sort'
        }
      }
    });
})();
</script>

<a href="#" class="btn primary"
id="processing-indicator-example-button">Show Standard Processing
Indicator</a>

<script>
(function() {
  var dynatable = $('#processing-indicator-example').data('dynatable');
  $('#processing-indicator-example-button').click( function(e) {
    dynatable.processingIndicator.show();
    setTimeout(function() {
      dynatable.processingIndicator.hide();
    }, 3000);
    e.preventDefault();
  });
})();
</script>
</div>

<div class="span6">
<div class="dynatable-demo">
<table id="processing-indicator-nice-example" class="table table-bordered">
  <thead>
    <tr>
      <th>Important Things</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>E=MC<sup>2</sup></td>
    </tr>
    <tr>
      <td>F=MA</td>
    </tr>
    <tr>
      <td>A<sup>2</sup>+B<sup>2</sup>=C<sup>2</sup></td>
    </tr>
  </tbody>
</table>
</div>

<script>
(function() {
  $('#processing-indicator-nice-example').dynatable({
    features: {
      paginate: false,
      search: false,
      recordCount: false,
      pushState: false,
      sort: false
    },
    inputs: {
      processingText: 'Loading <img src="https://s3.amazonaws.com/dynatable-docs-assets/images/loading.gif" />'
    }
  });
})();
</script>

<a href="#" class="btn primary" id="processing-indicator-nice-example-button">Show Nicer Processing Indicator</a>

<script>
(function() {
  var dynatable = $('#processing-indicator-nice-example').data('dynatable');
  $('#processing-indicator-nice-example-button').click( function(e) {
    dynatable.processingIndicator.hide();
    dynatable.processingIndicator.show();
    setTimeout(function() {
      dynatable.processingIndicator.hide();
    }, 3000);
    e.preventDefault();
  });
})();
</script>

</div>
</div>


<p>To show or hide the processing indicator above, we can call the
<code>dynatable.processingIndicator.show()</code> and
<code>dynatable.processingIndicator.hide()</code> functions.</p>

<p>For the nicer example, we just add our own custom markup for the
processing indicator, along with some custom CSS.</p>

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#processing-indicator-nice-example&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
  <span class="nx">inputs</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">processingText</span><span class="o">:</span> <span class="s1">&#39;Loading &lt;img src=&quot;/images/loading.gif&quot; /&gt;&#39;</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>




<div class="highlight"><pre><code class="css"><span class="nc">.dynatable-processing</span> <span class="p">{</span>
  <span class="k">background</span><span class="o">:</span> <span class="m">#000</span><span class="p">;</span>
  <span class="k">opacity</span><span class="o">:</span> <span class="m">0</span><span class="o">.</span><span class="m">6</span><span class="p">;</span>
  <span class="o">-</span><span class="n">webkit</span><span class="o">-</span><span class="k">border</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">4px</span><span class="p">;</span>
  <span class="o">-</span><span class="n">moz</span><span class="o">-</span><span class="k">border</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">4px</span><span class="p">;</span>
  <span class="k">border</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">4px</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.dynatable-processing</span> <span class="nt">span</span> <span class="p">{</span>
  <span class="k">background</span><span class="o">:</span> <span class="m">#FFF</span><span class="p">;</span>
  <span class="k">border</span><span class="o">:</span> <span class="k">solid</span> <span class="m">2px</span> <span class="m">#57A957</span><span class="p">;</span>
  <span class="k">color</span><span class="o">:</span> <span class="m">#333</span><span class="p">;</span>
  <span class="k">padding</span><span class="o">:</span> <span class="m">25px</span><span class="p">;</span>
  <span class="k">font-size</span><span class="o">:</span> <span class="m">2em</span><span class="p">;</span>
  <span class="n">box</span><span class="o">-</span><span class="n">shadow</span><span class="o">:</span> <span class="m">0px</span> <span class="m">0px</span> <span class="m">15px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">.</span><span class="m">5</span><span class="p">);</span>
<span class="p">}</span>
<span class="nc">.dynatable-processing</span> <span class="nt">span</span> <span class="nt">img</span> <span class="p">{</span>
  <span class="k">vertical-align</span><span class="o">:</span> <span class="k">middle</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div>


<h2>Rendering</h2>

<p>When rendering JSON data to the page, dynatable passes data through
"writers" (you may notice that this is the opposite of the normalization step
which runs the DOM elements through "readers").</p>

<p>When rendering (and normalizing), dynatable assumes that our container element (on which
we called dynatable) contains elements matching
<code>table.bodyRowSelector</code>, each mapping to one record. By default,
dynatable assumes we're rendering to an HTML table, so our
<code>table.bodyRowSelector</code> is <code>'tbody tr'</code>.</p>

<p>To render our records, dynatable will loop through our records, running
<code>writers._rowWriter</code> on each record to create a collection of DOM elements.
The default <code>writers._rowWriter</code> creates a table <code>tr</code> element and loops
through the element attributes (matching our columns) to call
<code>writers._cellWriter</code> on each.</p>

<h3>A Stylized List</h3>

<div class="dynatable-demo">
  <ul id="ul-example" class="row-fluid">
    <li class="span4" data-color="gray">
      <div class="thumbnail">
        <div class="thumbnail-image">
          <img src="https://s3.amazonaws.com/dynatable-docs-assets/images/dinosaurs/Stegosaurus_BW.jpg" />
        </div>
        <div class="caption">
          <h3>Stegosaurus armatus</h3>
          <p>State: Colorado</p>
          <p>Year: 1982</p>
          <p><a target="_blank" href="http://en.wikipedia.org/wiki/Stegosaurus" class="btn btn-primary">View</a> <a href="#" class="btn">Action</a></p>
        </div>
      </div>
    </li>
    <li class="span4" data-color="color">
      <div class="thumbnail">
        <div class="thumbnail-image">
          <img src="https://s3.amazonaws.com/dynatable-docs-assets/images/dinosaurs/300px-Astrodon1DB.jpg" />
        </div>
        <div class="caption">
          <h3>Astrodon johnstoni</h3>
          <p>State: Maryland</p>
          <p>Year: 1998</p>
          <p><a target="_blank" href="http://en.wikipedia.org/wiki/Astrodon_johnstoni" class="btn btn-primary">View</a> <a href="#" class="btn">Action</a></p>
        </div>
      </div>
    </li>
    <li class="span4" data-color="gray">
      <div class="thumbnail">
        <div class="thumbnail-image">
          <img src="https://s3.amazonaws.com/dynatable-docs-assets/images/dinosaurs/300px-Hypsibema_missouriensis_Bollinger_County_Museum_of_Natural_History.jpg" />
        </div>
        <div class="caption">
          <h3>Hypsibema missouriensis</h3>
          <p>State: Missouri</p>
          <p>Year: 2004</p>
          <p><a target="_blank" href="http://en.wikipedia.org/wiki/Hypsibema_missouriensis" class="btn btn-primary">View</a> <a href="#" class="btn">Action</a></p>
        </div>
      </div>
    </li>
    <li class="span4" data-color="color">
      <div class="thumbnail">
        <div class="thumbnail-image">
          <img src="https://s3.amazonaws.com/dynatable-docs-assets/images/dinosaurs/Knight_hadrosaurs.jpg" />
        </div>
        <div class="caption">
          <h3>Hadrosaurus foulkii</h3>
          <p>State: New Jersey</p>
          <p>Year: 1991</p>
          <p><a target="_blank" href="http://en.wikipedia.org/wiki/Hadrosaurus" class="btn btn-primary">View</a> <a href="#" class="btn">Action</a></p>
        </div>
      </div>
    </li>
    <li class="span4" data-color="gray">
      <div class="thumbnail">
        <div class="thumbnail-image">
          <img src="https://s3.amazonaws.com/dynatable-docs-assets/images/dinosaurs/300px-Sauroposeidon_dinosaur.svg.png" />
        </div>
        <div class="caption">
          <h3>Paluxysaurus jonesi</h3>
          <p>State: Texas</p>
          <p>Year: 2009</p>
          <p><a target="_blank" href="http://en.wikipedia.org/wiki/Paluxysaurus" class="btn btn-primary">View</a> <a href="#" class="btn">Action</a></p>
        </div>
      </div>
    </li>
    <li class="span4" data-color="color">
      <div class="thumbnail">
        <div class="thumbnail-image">
          <img src="https://s3.amazonaws.com/dynatable-docs-assets/images/dinosaurs/300px-Triceratops_BW.jpg" />
        </div>
        <div class="caption">
          <h3>Triceratops</h3>
          <p>State: Wyoming</p>
          <p>Year: 1994</p>
          <p><a target="_blank" href="http://en.wikipedia.org/wiki/Triceratops" class="btn btn-primary">View</a> <a href="#" class="btn">Action</a></p>
        </div>
      </div>
    </li>
  </ul>
</div>


<p><cite>
<i>
* List of U.S. state dinosaurs from <a target="_blank" href="http://en.wikipedia.org/wiki/List_of_U.S._state_dinosaurs">Wikipedia</a>
</i>
</cite></p>

<script>
(function() {
  // Function that renders the list items from our records
  function ulWriter(rowIndex, record, columns, cellWriter) {
    var cssClass = "span4", li;
    if (rowIndex % 3 === 0) { cssClass += ' first'; }
    li = '<li class="' + cssClass + '"><div class="thumbnail"><div class="thumbnail-image">' + record.thumbnail + '</div><div class="caption">' + record.caption + '</div></div></li>';
    return li;
  }

  // Function that creates our records from the DOM when the page is loaded
  function ulReader(index, li, record) {
    var $li = $(li),
        $caption = $li.find('.caption');
    record.thumbnail = $li.find('.thumbnail-image').html();
    record.caption = $caption.html();
    record.label = $caption.find('h3').text();
    record.description = $caption.find('p').text();
    record.color = $li.data('color');
  }

  $('#ul-example').dynatable({
    table: {
      bodyRowSelector: 'li'
    },
    dataset: {
      perPageDefault: 3,
      perPageOptions: [3, 6]
    },
    writers: {
      _rowWriter: ulWriter
    },
    readers: {
      _rowReader: ulReader
    },
    params: {
      records: 'dinosaurs'
    }
  });
})();
</script>


<p>If our container element is a <code>ul</code>, like above, we could customize our rowWriter as
follows:</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">id=</span><span class="s">&quot;ul-example&quot;</span> <span class="na">class=</span><span class="s">&quot;row-fluid&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;span4&quot;</span> <span class="na">data-color=</span><span class="s">&quot;gray&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;thumbnail&quot;</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;thumbnail-image&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;/images/dinosaurs/Stegosaurus_BW.jpg&quot;</span> <span class="nt">/&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;caption&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h3&gt;</span>Stegosaurus armatus<span class="nt">&lt;/h3&gt;</span>
        <span class="nt">&lt;p&gt;</span>State: Colorado<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;</span>Year: 1982<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;http://en.wikipedia.org/wiki/Stegosaurus&quot;</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary&quot;</span><span class="nt">&gt;</span>View<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">class=</span><span class="s">&quot;btn&quot;</span><span class="nt">&gt;</span>View<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="c">&lt;!-- ... //--&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>




<div class="highlight"><pre><code class="js"><span class="c1">// Function that renders the list items from our records</span>
<span class="kd">function</span> <span class="nx">ulWriter</span><span class="p">(</span><span class="nx">rowIndex</span><span class="p">,</span> <span class="nx">record</span><span class="p">,</span> <span class="nx">columns</span><span class="p">,</span> <span class="nx">cellWriter</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">cssClass</span> <span class="o">=</span> <span class="s2">&quot;span4&quot;</span><span class="p">,</span> <span class="nx">li</span><span class="p">;</span>
  <span class="k">if</span> <span class="p">(</span><span class="nx">rowIndex</span> <span class="o">%</span> <span class="mi">3</span> <span class="o">===</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span> <span class="nx">cssClass</span> <span class="o">+=</span> <span class="s1">&#39; first&#39;</span><span class="p">;</span> <span class="p">}</span>
  <span class="nx">li</span> <span class="o">=</span> <span class="s1">&#39;&lt;li class=&quot;&#39;</span> <span class="o">+</span> <span class="nx">cssClass</span> <span class="o">+</span> <span class="s1">&#39;&quot;&gt;&lt;div class=&quot;thumbnail&quot;&gt;&lt;div class=&quot;thumbnail-image&quot;&gt;&#39;</span> <span class="o">+</span> <span class="nx">record</span><span class="p">.</span><span class="nx">thumbnail</span> <span class="o">+</span> <span class="s1">&#39;&lt;/div&gt;&lt;div class=&quot;caption&quot;&gt;&#39;</span> <span class="o">+</span> <span class="nx">record</span><span class="p">.</span><span class="nx">caption</span> <span class="o">+</span> <span class="s1">&#39;&lt;/div&gt;&lt;/div&gt;&lt;/li&gt;&#39;</span><span class="p">;</span>
  <span class="k">return</span> <span class="nx">li</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Function that creates our records from the DOM when the page is loaded</span>
<span class="kd">function</span> <span class="nx">ulReader</span><span class="p">(</span><span class="nx">index</span><span class="p">,</span> <span class="nx">li</span><span class="p">,</span> <span class="nx">record</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">$li</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="nx">li</span><span class="p">),</span>
      <span class="nx">$caption</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.caption&#39;</span><span class="p">);</span>
  <span class="nx">record</span><span class="p">.</span><span class="nx">thumbnail</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.thumbnail-image&#39;</span><span class="p">).</span><span class="nx">html</span><span class="p">();</span>
  <span class="nx">record</span><span class="p">.</span><span class="nx">caption</span> <span class="o">=</span> <span class="nx">$caption</span><span class="p">.</span><span class="nx">html</span><span class="p">();</span>
  <span class="nx">record</span><span class="p">.</span><span class="nx">label</span> <span class="o">=</span> <span class="nx">$caption</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;h3&#39;</span><span class="p">).</span><span class="nx">text</span><span class="p">();</span>
  <span class="nx">record</span><span class="p">.</span><span class="nx">description</span> <span class="o">=</span> <span class="nx">$caption</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;p&#39;</span><span class="p">).</span><span class="nx">text</span><span class="p">();</span>
  <span class="nx">record</span><span class="p">.</span><span class="nx">color</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">data</span><span class="p">(</span><span class="s1">&#39;color&#39;</span><span class="p">);</span>
<span class="p">}</span>

<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#ul-example&#39;</span><span class="p">).</span><span class="nx">dynatable</span><span class="p">({</span>
  <span class="nx">table</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">bodyRowSelector</span><span class="o">:</span> <span class="s1">&#39;li&#39;</span>
  <span class="p">},</span>
  <span class="nx">dataset</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">perPageDefault</span><span class="o">:</span> <span class="mi">3</span><span class="p">,</span>
    <span class="nx">perPageOptions</span><span class="o">:</span> <span class="p">[</span><span class="mi">3</span><span class="p">,</span> <span class="mi">6</span><span class="p">]</span>
  <span class="p">},</span>
  <span class="nx">writers</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">_rowWriter</span><span class="o">:</span> <span class="nx">ulWriter</span>
  <span class="p">},</span>
  <span class="nx">readers</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">_rowReader</span><span class="o">:</span> <span class="nx">ulReader</span>
  <span class="p">},</span>
  <span class="nx">params</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">records</span><span class="o">:</span> <span class="s1">&#39;kittens&#39;</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>


<p>We could have defined our own <code>writers._cellWriter</code> as well, defining a
custom function for rendering each attribute within the row, but we opted
to skip it entirely and to just do everything in the <code>writers._rowWriter</code>.</p>

<h3>An Interactive Chart</h3>

<div id="chart-example-chart"></div>


<p><a class="btn primary" id="toggle-chart-table">Show Table to Sort the Chart Series</a></p>

<table id="chart-example" class="table table-bordered">
  <thead><tr><th>City</th><th>Population</th></tr></thead>
  <tbody>
    <tr><td>Tokyo</td><td>34.4</td></tr>
    <tr><td>Jakarta</td><td>21.8</td></tr>
    <tr><td>New York</td><td>20.1</td></tr>
    <tr><td>Seoul</td><td>20</td></tr>
    <tr><td>Manila</td><td>19.6</td></tr>
    <tr><td>Mumbai</td><td>19.5</td></tr>
    <tr><td>Sao Paulo</td><td>19.1</td></tr>
    <tr><td>Mexico City</td><td>18.4</td></tr>
    <tr><td>Dehli</td><td>18</td></tr>
    <tr><td>Osaka</td><td>17.3</td></tr>
    <tr><td>Cairo</td><td>16.8</td></tr>
    <tr><td>Kolkata</td><td>15</td></tr>
    <tr><td>Los Angeles</td><td>14.7</td></tr>
    <tr><td>Shanghai</td><td>14.5</td></tr>
    <tr><td>Moscow</td><td>13.3</td></tr>
    <tr><td>Beijing</td><td>12.8</td></tr>
    <tr><td>Buenos Aires</td><td>12.4</td></tr>
    <tr><td>Guangzhou</td><td>11.8</td></tr>
    <tr><td>Shenzhen</td><td>11.7</td></tr>
    <tr><td>Istanbul</td><td>11.2</td></tr>
  </tbody>
</table>




<script>
(function() {
  var $table = $('#chart-example'), $chart = $('#chart-example-chart'), chart;

  // Create a button to toggle our table's visibility.
  // We could just hide it completely if we don't need it.
  $('#toggle-chart-table').click(function(e) {
    e.preventDefault();
    $table.toggle();
  });

  // Set up our Highcharts chart
  chart = new Highcharts.Chart({
    chart: {
      type: 'column',
      renderTo: 'chart-example-chart'
    },
    title: {
      text: 'World\'s largest cities per 2008'
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Population (millions)'
      }
    },
    series: [{
      name: 'Population',
      color: '#006A72'
    }]
  });

  // Create a function to update the chart with the current working set
  // of records from dynatable, after all operations have been run.
  function updateChart() {
    var dynatable = $table.data('dynatable'), categories = [], values = [];
    $.each(dynatable.settings.dataset.records, function() {
      categories.push(this.city);
      values.push(parseFloat(this.population));
    });

    chart.xAxis[0].setCategories(categories);
    chart.series[0].setData(values);
  };

  // Attach dynatable to our table,
  // and trigger our update function whenever we interact with it.
  $table
    .dynatable({
      inputs: {
        queryEvent: 'blur change keyup',
        recordCountTarget: $chart,
        paginationLinkTarget: $chart,
        searchTarget: $chart,
        perPageTarget: $chart
      },
      dataset: {
        perPageOptions: [5, 10, 20],
        sortTypes: {
          'population': 'number'
        }
      }
    })
    .hide()
    .bind('dynatable:afterProcess', updateChart);

  // Run our updateChart function for the first time.
  updateChart();
})();
</script>


<p>Our initial data:</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;chart-example-chart&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn primary&quot;</span> <span class="na">id=</span><span class="s">&quot;toggle-chart-table&quot;</span><span class="nt">&gt;</span>Show Table to Sort the Chart Series<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;table</span> <span class="na">id=</span><span class="s">&quot;chart-example&quot;</span> <span class="na">class=</span><span class="s">&quot;table table-bordered&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;&lt;tr&gt;&lt;th&gt;</span>City<span class="nt">&lt;/th&gt;&lt;th&gt;</span>Population<span class="nt">&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Tokyo<span class="nt">&lt;/td&gt;&lt;td&gt;</span>34.4<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Jakarta<span class="nt">&lt;/td&gt;&lt;td&gt;</span>21.8<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>New York<span class="nt">&lt;/td&gt;&lt;td&gt;</span>20.1<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Seoul<span class="nt">&lt;/td&gt;&lt;td&gt;</span>20<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Manila<span class="nt">&lt;/td&gt;&lt;td&gt;</span>19.6<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Mumbai<span class="nt">&lt;/td&gt;&lt;td&gt;</span>19.5<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Sao Paulo<span class="nt">&lt;/td&gt;&lt;td&gt;</span>19.1<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Mexico City<span class="nt">&lt;/td&gt;&lt;td&gt;</span>18.4<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Dehli<span class="nt">&lt;/td&gt;&lt;td&gt;</span>18<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Osaka<span class="nt">&lt;/td&gt;&lt;td&gt;</span>17.3<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Cairo<span class="nt">&lt;/td&gt;&lt;td&gt;</span>16.8<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Kolkata<span class="nt">&lt;/td&gt;&lt;td&gt;</span>15<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Los Angeles<span class="nt">&lt;/td&gt;&lt;td&gt;</span>14.7<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Shanghai<span class="nt">&lt;/td&gt;&lt;td&gt;</span>14.5<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Moscow<span class="nt">&lt;/td&gt;&lt;td&gt;</span>13.3<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Beijing<span class="nt">&lt;/td&gt;&lt;td&gt;</span>12.8<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Buenos Aires<span class="nt">&lt;/td&gt;&lt;td&gt;</span>12.4<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Guangzhou<span class="nt">&lt;/td&gt;&lt;td&gt;</span>11.8<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Shenzhen<span class="nt">&lt;/td&gt;&lt;td&gt;</span>11.7<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;&lt;td&gt;</span>Istanbul<span class="nt">&lt;/td&gt;&lt;td&gt;</span>11.2<span class="nt">&lt;/td&gt;&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>
</code></pre></div>


<p>The JS:</p>

<div class="highlight"><pre><code class="js"><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">$table</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#chart-example&#39;</span><span class="p">),</span> <span class="nx">$chart</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#chart-example-chart&#39;</span><span class="p">),</span> <span class="nx">chart</span><span class="p">;</span>

  <span class="c1">// Create a button to toggle our table&#39;s visibility.</span>
  <span class="c1">// We could just hide it completely if we don&#39;t need it.</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#toggle-chart-table&#39;</span><span class="p">).</span><span class="nx">click</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">();</span>
    <span class="nx">$table</span><span class="p">.</span><span class="nx">toggle</span><span class="p">();</span>
  <span class="p">});</span>

  <span class="c1">// Set up our Highcharts chart</span>
  <span class="nx">chart</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Highcharts</span><span class="p">.</span><span class="nx">Chart</span><span class="p">({</span>
    <span class="nx">chart</span><span class="o">:</span> <span class="p">{</span>
      <span class="nx">type</span><span class="o">:</span> <span class="s1">&#39;column&#39;</span><span class="p">,</span>
      <span class="nx">renderTo</span><span class="o">:</span> <span class="s1">&#39;chart-example-chart&#39;</span>
    <span class="p">},</span>
    <span class="nx">title</span><span class="o">:</span> <span class="p">{</span>
      <span class="nx">text</span><span class="o">:</span> <span class="s1">&#39;World\&#39;s largest cities per 2008&#39;</span>
    <span class="p">},</span>
    <span class="nx">yAxis</span><span class="o">:</span> <span class="p">{</span>
      <span class="nx">min</span><span class="o">:</span> <span class="mi">0</span><span class="p">,</span>
      <span class="nx">title</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">text</span><span class="o">:</span> <span class="s1">&#39;Population (millions)&#39;</span>
      <span class="p">}</span>
    <span class="p">},</span>
    <span class="nx">series</span><span class="o">:</span> <span class="p">[{</span>
      <span class="nx">name</span><span class="o">:</span> <span class="s1">&#39;Population&#39;</span><span class="p">,</span>
      <span class="nx">color</span><span class="o">:</span> <span class="s1">&#39;#006A72&#39;</span>
    <span class="p">}]</span>
  <span class="p">});</span>

  <span class="c1">// Create a function to update the chart with the current working set</span>
  <span class="c1">// of records from dynatable, after all operations have been run.</span>
  <span class="kd">function</span> <span class="nx">updateChart</span><span class="p">()</span> <span class="p">{</span>
    <span class="kd">var</span> <span class="nx">dynatable</span> <span class="o">=</span> <span class="nx">$table</span><span class="p">.</span><span class="nx">data</span><span class="p">(</span><span class="s1">&#39;dynatable&#39;</span><span class="p">),</span> <span class="nx">categories</span> <span class="o">=</span> <span class="p">[],</span> <span class="nx">values</span> <span class="o">=</span> <span class="p">[];</span>
    <span class="nx">$</span><span class="p">.</span><span class="nx">each</span><span class="p">(</span><span class="nx">dynatable</span><span class="p">.</span><span class="nx">settings</span><span class="p">.</span><span class="nx">dataset</span><span class="p">.</span><span class="nx">records</span><span class="p">,</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
      <span class="nx">categories</span><span class="p">.</span><span class="nx">push</span><span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">city</span><span class="p">);</span>
      <span class="nx">values</span><span class="p">.</span><span class="nx">push</span><span class="p">(</span><span class="nb">parseFloat</span><span class="p">(</span><span class="k">this</span><span class="p">.</span><span class="nx">population</span><span class="p">));</span>
    <span class="p">});</span>

    <span class="nx">chart</span><span class="p">.</span><span class="nx">xAxis</span><span class="p">[</span><span class="mi">0</span><span class="p">].</span><span class="nx">setCategories</span><span class="p">(</span><span class="nx">categories</span><span class="p">);</span>
    <span class="nx">chart</span><span class="p">.</span><span class="nx">series</span><span class="p">[</span><span class="mi">0</span><span class="p">].</span><span class="nx">setData</span><span class="p">(</span><span class="nx">values</span><span class="p">);</span>
  <span class="p">};</span>

  <span class="c1">// Attach dynatable to our table, hide the table,</span>
  <span class="c1">// and trigger our update function whenever we interact with it.</span>
  <span class="nx">$table</span>
    <span class="p">.</span><span class="nx">dynatable</span><span class="p">({</span>
      <span class="nx">inputs</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">queryEvent</span><span class="o">:</span> <span class="s1">&#39;blur change keyup&#39;</span><span class="p">,</span>
        <span class="nx">recordCountTarget</span><span class="o">:</span> <span class="nx">$chart</span><span class="p">,</span>
        <span class="nx">paginationLinkTarget</span><span class="o">:</span> <span class="nx">$chart</span><span class="p">,</span>
        <span class="nx">searchTarget</span><span class="o">:</span> <span class="nx">$chart</span><span class="p">,</span>
        <span class="nx">perPageTarget</span><span class="o">:</span> <span class="nx">$chart</span>
      <span class="p">},</span>
      <span class="nx">dataset</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">perPageOptions</span><span class="o">:</span> <span class="p">[</span><span class="mi">5</span><span class="p">,</span> <span class="mi">10</span><span class="p">,</span> <span class="mi">20</span><span class="p">],</span>
        <span class="nx">sortTypes</span><span class="o">:</span> <span class="p">{</span>
          <span class="s1">&#39;population&#39;</span><span class="o">:</span> <span class="s1">&#39;number&#39;</span>
        <span class="p">}</span>
      <span class="p">}</span>
    <span class="p">})</span>
    <span class="p">.</span><span class="nx">hide</span><span class="p">()</span>
    <span class="p">.</span><span class="nx">bind</span><span class="p">(</span><span class="s1">&#39;dynatable:afterProcess&#39;</span><span class="p">,</span> <span class="nx">updateChart</span><span class="p">);</span>

  <span class="c1">// Run our updateChart function for the first time.</span>
  <span class="nx">updateChart</span><span class="p">();</span>
<span class="p">})();</span>
</code></pre></div>


<h2>Configuration</h2>

<p>If you want to change any of the following default configuration options
globally (for all instances of dynatable within your application), you
can call the <code>$.dynatableSetup()</code> function to do so:</p>

<div class="highlight"><pre><code class="js"><span class="nx">$</span><span class="p">.</span><span class="nx">dynatableSetup</span><span class="p">({</span>
  <span class="c1">// your global default options here</span>
<span class="p">});</span>
</code></pre></div>


<p>For example, this documentation page has <code>features: { pushState: false}</code>
so as not to fill your browser's pushState queue as you click around
through made-up data in the examples (except for the first example,
which re-enables it for demo purposes).</p>

<p>The confiuration options (with default values) for dynatable are:</p>

<div class="highlight"><pre><code class="js"><span class="p">{</span>
  <span class="nx">features</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">paginate</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span>
    <span class="nx">sort</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span>
    <span class="nx">pushState</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span>
    <span class="nx">search</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span>
    <span class="nx">recordCount</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span>
    <span class="nx">perPageSelect</span><span class="o">:</span> <span class="kc">true</span>
  <span class="p">},</span>
  <span class="nx">table</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">defaultColumnIdStyle</span><span class="o">:</span> <span class="s1">&#39;camelCase&#39;</span><span class="p">,</span>
    <span class="nx">columns</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">headRowSelector</span><span class="o">:</span> <span class="s1">&#39;thead tr&#39;</span><span class="p">,</span> <span class="c1">// or e.g. tr:first-child</span>
    <span class="nx">bodyRowSelector</span><span class="o">:</span> <span class="s1">&#39;tbody tr&#39;</span><span class="p">,</span>
    <span class="nx">headRowClass</span><span class="o">:</span> <span class="kc">null</span>
  <span class="p">},</span>
  <span class="nx">inputs</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">queries</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">sorts</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">multisort</span><span class="o">:</span> <span class="p">[</span><span class="s1">&#39;ctrlKey&#39;</span><span class="p">,</span> <span class="s1">&#39;shiftKey&#39;</span><span class="p">,</span> <span class="s1">&#39;metaKey&#39;</span><span class="p">],</span>
    <span class="nx">page</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">queryEvent</span><span class="o">:</span> <span class="s1">&#39;blur change&#39;</span><span class="p">,</span>
    <span class="nx">recordCountTarget</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">recordCountPlacement</span><span class="o">:</span> <span class="s1">&#39;after&#39;</span><span class="p">,</span>
    <span class="nx">paginationLinkTarget</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">paginationLinkPlacement</span><span class="o">:</span> <span class="s1">&#39;after&#39;</span><span class="p">,</span>
    <span class="nx">paginationPrev</span><span class="o">:</span> <span class="s1">&#39;Previous&#39;</span><span class="p">,</span>
    <span class="nx">paginationNext</span><span class="o">:</span> <span class="s1">&#39;Next&#39;</span><span class="p">,</span>
    <span class="nx">paginationGap</span><span class="o">:</span> <span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">1</span><span class="p">],</span>
    <span class="nx">searchTarget</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">searchPlacement</span><span class="o">:</span> <span class="s1">&#39;before&#39;</span><span class="p">,</span>
    <span class="nx">perPageTarget</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">perPagePlacement</span><span class="o">:</span> <span class="s1">&#39;before&#39;</span><span class="p">,</span>
    <span class="nx">perPageText</span><span class="o">:</span> <span class="s1">&#39;Show: &#39;</span><span class="p">,</span>
    <span class="nx">recordCountText</span><span class="o">:</span> <span class="s1">&#39;Showing &#39;</span><span class="p">,</span>
    <span class="nx">processingText</span><span class="o">:</span> <span class="s1">&#39;Processing...&#39;</span>
  <span class="p">},</span>
  <span class="nx">dataset</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">ajax</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
    <span class="nx">ajaxUrl</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">ajaxCache</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">ajaxOnLoad</span><span class="o">:</span> <span class="kc">false</span><span class="p">,</span>
    <span class="nx">ajaxMethod</span><span class="o">:</span> <span class="s1">&#39;GET&#39;</span><span class="p">,</span>
    <span class="nx">ajaxDataType</span><span class="o">:</span> <span class="s1">&#39;json&#39;</span><span class="p">,</span>
    <span class="nx">totalRecordCount</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">queries</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">queryRecordCount</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">page</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">perPageDefault</span><span class="o">:</span> <span class="mi">10</span><span class="p">,</span>
    <span class="nx">perPageOptions</span><span class="o">:</span> <span class="p">[</span><span class="mi">10</span><span class="p">,</span><span class="mi">20</span><span class="p">,</span><span class="mi">50</span><span class="p">,</span><span class="mi">100</span><span class="p">],</span>
    <span class="nx">sorts</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">sortsKeys</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">sortTypes</span><span class="o">:</span> <span class="p">{},</span>
    <span class="nx">records</span><span class="o">:</span> <span class="kc">null</span>
  <span class="p">},</span>
  <span class="c1">// Built-in writer functions,</span>
  <span class="c1">// can be overwritten, any additional functions</span>
  <span class="c1">// provided in writers will be merged with</span>
  <span class="c1">// this default object.</span>
  <span class="nx">writers</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">_rowWriter</span><span class="o">:</span> <span class="nx">defaultRowWriter</span><span class="p">,</span>
    <span class="nx">_cellWriter</span><span class="o">:</span> <span class="nx">defaultCellWriter</span><span class="p">,</span>
    <span class="nx">_attributeWriter</span><span class="o">:</span> <span class="nx">defaultAttributeWriter</span>
  <span class="p">},</span>
  <span class="c1">// Built-in reader functions,</span>
  <span class="c1">// can be overwritten, any additional functions</span>
  <span class="c1">// provided in readers will be merged with</span>
  <span class="c1">// this default object.</span>
  <span class="nx">readers</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">_rowReader</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">_attributeReader</span><span class="o">:</span> <span class="nx">defaultAttributeReader</span>
  <span class="p">},</span>
  <span class="nx">params</span><span class="o">:</span> <span class="p">{</span>
    <span class="nx">dynatable</span><span class="o">:</span> <span class="s1">&#39;dynatable&#39;</span><span class="p">,</span>
    <span class="nx">queries</span><span class="o">:</span> <span class="s1">&#39;queries&#39;</span><span class="p">,</span>
    <span class="nx">sorts</span><span class="o">:</span> <span class="s1">&#39;sorts&#39;</span><span class="p">,</span>
    <span class="nx">page</span><span class="o">:</span> <span class="s1">&#39;page&#39;</span><span class="p">,</span>
    <span class="nx">perPage</span><span class="o">:</span> <span class="s1">&#39;perPage&#39;</span><span class="p">,</span>
    <span class="nx">offset</span><span class="o">:</span> <span class="s1">&#39;offset&#39;</span><span class="p">,</span>
    <span class="nx">records</span><span class="o">:</span> <span class="s1">&#39;records&#39;</span><span class="p">,</span>
    <span class="nx">record</span><span class="o">:</span> <span class="kc">null</span><span class="p">,</span>
    <span class="nx">queryRecordCount</span><span class="o">:</span> <span class="s1">&#39;queryRecordCount&#39;</span><span class="p">,</span>
    <span class="nx">totalRecordCount</span><span class="o">:</span> <span class="s1">&#39;totalRecordCount&#39;</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>


<h3>Data Attributes</h3>

<p>In addition to the configuration options directly available above, some
properties apply specifically to certain columns or elements. Those can
be set using HTML5 data attributes.</p>

<div class="alert alert-block">
Documentation on each data-attribute and what it does coming soon.
</div>


<h4>On table column headers</h4>

<p><code>data-dynatable-column</code></p>

<p><code>data-dynatable-sorts</code></p>

<p><code>data-dynatable-no-sort</code></p>

<h4>On query inputs</h4>

<p><code>data-dynatable-query-event</code></p>

<p><code>data-dynatable-query</code></p>

<h2>Event Hooks</h2>

<table class="table table-bordered responsive-table">
  <thead>
    <tr>
      <th>Event</th>
      <th>Description</th>
      <th>Parameters</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-title="Event"><code>dynatable:init</cod></td>
      <td data-title="Description">Run after dynatable is initialized and setup, right before the initial <code>process()</code> is run.</td>
      <td data-title="Parameters"><code>dynatable</code> (attached dynatable instance object)</td>
    </tr>
    <tr>
      <td data-title="Event"><code>dynatable:beforeProcess</cod></td>
      <td data-title="Description">Run at the beginning of <code>process()</code>.</td>
      <td data-title="Parameters"><code>data</code> (the data object containing the settings and records for the <code>process()</code> function)</td>
    </tr>
    <tr>
      <td data-title="Event"><code>dynatable:ajax:success</cod></td>
      <td data-title="Description">Run only if the dynatable instance has <code>dataset.ajax=true</code>, when the AJAX request returns successfully during the <code>process()</code> function.</td>
      <td data-title="Parameters"><code>response</code> (the jqXhr response object)</td>
    </tr>
    <tr>
      <td data-title="Event"><code>dynatable:afterProcess</cod></td>
      <td data-title="Description">Run at the end of the <code>process()</code> function.</td>
      <td data-title="Parameters"><code>data</code> (the data object containing the settings and records for the <code>process()</code> function)</td>
    </tr>
    <tr>
      <td data-title="Event"><code>dynatable:beforeUpdate</cod></td>
      <td data-title="Description">Run right before the DOM is updated with the current record set.</td>
      <td data-title="Parameters"><code>$rows</code> (the set of DOM rows about to be written to the DOM)</td>
    </tr>
    <tr>
      <td data-title="Event"><code>dynatable:afterUpdate</cod></td>
      <td data-title="Description">Run right after the DOM is updated with the current record set.</td>
      <td data-title="Parameters"><code>$rows</code> (the set of DOM rows just written to the DOM)</td>
    </tr>
    <tr>
      <td data-title="Event"><code>dynatable:push</cod></td>
      <td data-title="Description">Run when pushState data is pushed to the window.</td>
      <td data-title="Parameters"><code>data</code> (the data object containing the settings and records to be cached in the pushState cache)</td>
    </tr>
  </tbody>
</table>


<h2>API</h2>

<p>You can interface directly with the dynatable API for finer grained
control and greater customization. The internal API is divided into
namespaces. To use the API, just call the namespaced function on the
dynatable object (stored in the <code>data['dynatable']</code> attribute of the
element on which dynatable was called).</p>

<div class="highlight"><pre><code class="js"><span class="kd">var</span> <span class="nx">dynatable</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#my-table&#39;</span><span class="p">).</span><span class="nx">data</span><span class="p">(</span><span class="s1">&#39;dynatable&#39;</span><span class="p">);</span>
</code></pre></div>


<p>For example, to update the dom with the current record set:</p>

<div class="highlight"><pre><code class="js"><span class="nx">dynatable</span><span class="p">.</span><span class="nx">dom</span><span class="p">.</span><span class="nx">update</span><span class="p">();</span>
</code></pre></div>




<div class="alert alert-block">
Since dynatable is still pre-version-one, the API is still in flux and
may change. Below is a list of the current API functions and arguments
(if any).
</div>


<h3>dom</h3>

<p>update</p>

<h3>domColumns</h3>

<p>getFromTable</p>

<p>add [$column, position, skipAppend, skipUpdate]</p>

<p>remove [columnIndexOrId]</p>

<p>removeFromTable [columnId]</p>

<p>removeFromArray [index]</p>

<p>generate [$cell]</p>

<p>attachGeneratedAttributes</p>

<h3>records</h3>

<p>updateFromJson [data]</p>

<p>sort</p>

<p>paginate</p>

<p>resetOriginal</p>

<p>pageBounds</p>

<p>getFromTable</p>

<p>count</p>

<h3>recordsCount</h3>

<p>create</p>

<p>attach</p>

<h3>processingIndicator</h3>

<p>create</p>

<p>position</p>

<p>attach</p>

<p>show</p>

<p>hide</p>

<h3>state</h3>

<p>push [data]</p>

<p>pop [event]</p>

<h3>sorts</h3>

<p>add [attr, direction]</p>

<p>remove [attr]</p>

<p>clear</p>

<p>guessType [a, b, attr]</p>

<p>functions (object)</p>

<h3>sortsHeaders</h3>

<p>create [cell]</p>

<p>attach</p>

<p>attachOne [cell]</p>

<p>appendArrowUp [$link]</p>

<p>appendArrorDown [$link]</p>

<p>removeArrow [$link]</p>

<p>removeAllArrows</p>

<p>toggleSort [event, $link, column]</p>

<p>sortedByColumn [$link, column]</p>

<p>sortedByColumnValue [column]</p>

<h3>queries</h3>

<p>add [name, value]</p>

<p>remove [name]</p>

<p>run</p>

<p>runSearch [query]</p>

<p>setupInputs</p>

<p>functions (object)</p>

<h3>inputSearch</h3>

<p>create</p>

<p>attach</p>

<h3>paginationPage</h3>

<p>set [page]</p>

<h3>paginationPerPage</h3>

<p>create</p>

<p>attach</p>

<p>set [number]</p>

<h3>paginationLinks</h3>

<p>create</p>

<p>attach</p>


        <div id='footer'>
          <p>
          Congratulations, you've reached the end of the documentation!
          </p>
          <p>
          
          Take these links. They will help you in your journey:
          
          </p>

          
            <h2> Project Resources</h2>
            <ul class='footer-list' id='resources'>
              
              <li><a href="https://github.com/alfajango/jquery-dynatable/issues">Report bug or request feature</a></li>
              
            </ul>
          

          
        </div>
      </div>

    </div>
  </body>
</html>

