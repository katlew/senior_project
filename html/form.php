
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<!-- JQUERY -->
	<script src="../js/jquery-1.11.2.min.js"></script>
	<script src="../js/jquery-ui-1.11.2/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../js/jquery-ui-1.11.2/jquery-ui.min.css">

	<script src="../js/form.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../css/form.css">
	<title> Test Event Date </title>
</head>
<body>
   
    
    <form action="<?php $_PHP_SELF ?>" method="post">
        Date
        <input type="date" name="eventDateStart" id="eventDateStart"/>
        to 
        <input type="date" name="eventDateEnd" id="eventDateEnd"/>
        
        <br/>
        Time
        <!-- Start Time -->
        <div class="group">
        <div class="select">
          <select id="hr" name="hr">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option selected>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          <span class="select-value" aria-hidden="true"></span>
        </div>
        <div class="blank">:</div>
        <div class="select">
          <select id="min" name="min">
            <option selected>00</option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            <option>32</option>
            <option>33</option>
            <option>34</option>
            <option>35</option>
            <option>36</option>
            <option>37</option>
            <option>38</option>
            <option>39</option>
            <option>40</option>
            <option>41</option>
            <option>42</option>
            <option>43</option>
            <option>44</option>
            <option>45</option>
            <option>46</option>
            <option>47</option>
            <option>48</option>
            <option>50</option>
            <option>51</option>
            <option>52</option>
            <option>53</option>
            <option>54</option>
            <option>55</option>
            <option>56</option>
            <option>57</option>
            <option>58</option>
            <option>59</option>
          </select>
          <span class="select-value" aria-hidden="true"></span>
        </div>

        <div class="select">
          <select id="ampm">
            <option selected>AM</option>
            <option>PM</option>
          </select>
          <span class="select-value" aria-hidden="true"></span>
        </div>
      </div>
        <!-- Time End  -->
        <br>
    Title <textarea rows="3" cols="50" name="eventTitle"></textarea>
        <br>
        <input type="submit" value="Create">
    </form>
    <?php
//        if(isset($_POST["hr"]))   {
//       
//        echo $_POST["hr"];
//    echo "jeff";
     if( isset($_POST["hr"]) || isset($_POST["min"]) || isset($_POST["eventTitle"]))
         {
            
            echo $_POST["hr"]; 
            echo $_POST["min"]; 
            echo $_POST["eventTitle"]; 
    echo "hello";
        
        }   
    ?>
   
</body>
</html>