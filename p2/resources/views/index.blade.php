@extends('layouts.master')

@section('content')
<h2>Abdominal Obesity and Your Health</h2>
    Although BMI is the golden standard for measuring obesity, it does not accurately reflect the distribution of fat. Scientific research reveals while no excess fat is good, abdominal fat is the most dangerous to your health. Empirical research also supports the Waist-to-Hip ratio method for evaluating abdominal fat and determining abdominal obesity. Calculate your Waist-to-Hip ratio below.

    <h2>Instructions</h2>
    <ul>
      <li>Measure your waist at the narrowest point and your hips at the widest point.</li>
      <li>Enter your Hip Circumference in Inches.</li>
      <li>Select your Waist Circumference. (If your waist is smaller than 10 in or larger than 70 in, please see your Doctor immediately)</li>
      <li>Select your Gender.</li>
      <li>Click the Calculate Button to reveal your Results!</li>
    </ul>

    <h2>Calculate your Waist-to-Hip Ratio</h2>
    <!-- Using GET default method -->
    <form method='GET' action='/forms'>
      <fieldset>
        <legend>ENTER YOUR INFORMATION</legend>
        <br>
        <div>
        <legend><label for='hips'>Enter your Hip Circumference in Inches Below:</label> </legend>
          <input type='text' name='hips' id='hips' placeholder='Enter Hip size in Inches' value='{{ old('hips') }}'>
          <!-- Adding valid hips variable as second option for old is optional for p2 -->
        </div>

        <br>

        <legend>Select your Waist Circumference Below:</legend>
        <div>
          <label for="waist"> Select Inches (10-70 inches)</label>

          <!-- Using old method for every value 10-70; not using it on Less than 10 or over 70 because these are not valid entries for the purpose of this WTH App -->
          <select id="waist" name='waist'>
            <option value="Below 10">Less than 10</option>
            <option value="10" {{ (old('waist') == '10') ? 'selected' : '' }}>10</option>
            <option value="11" {{ (old('waist') == '11') ? 'selected' : '' }}>11</option>
            <option value="12" {{ (old('waist') == '12') ? 'selected' : '' }}>12</option>
            <option value="13" {{ (old('waist') == '13') ? 'selected' : '' }}>13</option>
            <option value="14" {{ (old('waist') == '14') ? 'selected' : '' }}>14</option>
            <option value="15" {{ (old('waist') == '15') ? 'selected' : '' }}>15</option>
            <option value="16" {{ (old('waist') == '16') ? 'selected' : '' }}>16</option>
            <option value="17" {{ (old('waist') == '17') ? 'selected' : '' }}>17</option>
            <option value="18" {{ (old('waist') == '18') ? 'selected' : '' }}>18</option>
            <option value="19" {{ (old('waist') == '19') ? 'selected' : '' }}>19</option>
            <option value="20" {{ (old('waist') == '20') ? 'selected' : '' }}>20</option>
            <option value="21" {{ (old('waist') == '21') ? 'selected' : '' }}>21</option>
<option value="22" {{ (old('waist') == '22') ? 'selected' : '' }}>22</option>
<option value="23" {{ (old('waist') == '23') ? 'selected' : '' }}>23</option>
<option value="24" {{ (old('waist') == '24') ? 'selected' : '' }}>24</option>
<option value="25" {{ (old('waist') == '25') ? 'selected' : '' }}>25</option>
<option value="26" {{ (old('waist') == '26') ? 'selected' : '' }}>26</option>
<option value="27" {{ (old('waist') == '27') ? 'selected' : '' }}>27</option>
<option value="28" {{ (old('waist') == '28') ? 'selected' : '' }}>28</option>
<option value="29" {{ (old('waist') == '29') ? 'selected' : '' }}>29</option>
<option value="30" {{ (old('waist') == '30') ? 'selected' : '' }}>30</option>
<option value="31" {{ (old('waist') == '31') ? 'selected' : '' }}>31</option>
<option value="32" {{ (old('waist') == '32') ? 'selected' : '' }}>32</option>
<option value="33" {{ (old('waist') == '33') ? 'selected' : '' }}>33</option>
<option value="34" {{ (old('waist') == '34') ? 'selected' : '' }}>34</option>
<option value="35" {{ (old('waist') == '35') ? 'selected' : '' }}>35</option>
<option value="36" {{ (old('waist') == '36') ? 'selected' : '' }}>36</option>
<option value="37" {{ (old('waist') == '37') ? 'selected' : '' }}>37</option>
<option value="38" {{ (old('waist') == '38') ? 'selected' : '' }}>38</option>
<option value="39" {{ (old('waist') == '39') ? 'selected' : '' }}>39</option>
<option value="40" {{ (old('waist') == '40') ? 'selected' : '' }}>40</option>
<option value="41" {{ (old('waist') == '41') ? 'selected' : '' }}>41</option>
<option value="42" {{ (old('waist') == '42') ? 'selected' : '' }}>42</option>
<option value="43" {{ (old('waist') == '43') ? 'selected' : '' }}>43</option>
<option value="44" {{ (old('waist') == '44') ? 'selected' : '' }}>44</option>
<option value="45" {{ (old('waist') == '45') ? 'selected' : '' }}>45</option>
<option value="46" {{ (old('waist') == '46') ? 'selected' : '' }}>46</option>
<option value="47" {{ (old('waist') == '47') ? 'selected' : '' }}>47</option>
<option value="48" {{ (old('waist') == '48') ? 'selected' : '' }}>48</option>
<option value="49" {{ (old('waist') == '49') ? 'selected' : '' }}>49</option>
<option value="50" {{ (old('waist') == '50') ? 'selected' : '' }}>50</option>
<option value="51" {{ (old('waist') == '51') ? 'selected' : '' }}>51</option>
<option value="52" {{ (old('waist') == '52') ? 'selected' : '' }}>52</option>
<option value="53" {{ (old('waist') == '53') ? 'selected' : '' }}>53</option>
<option value="54" {{ (old('waist') == '54') ? 'selected' : '' }}>54</option>
<option value="55" {{ (old('waist') == '55') ? 'selected' : '' }}>55</option>
<option value="56" {{ (old('waist') == '56') ? 'selected' : '' }}>56</option>
<option value="57" {{ (old('waist') == '57') ? 'selected' : '' }}>57</option>
<option value="58" {{ (old('waist') == '58') ? 'selected' : '' }}>58</option>
<option value="59" {{ (old('waist') == '59') ? 'selected' : '' }}>59</option>
<option value="60" {{ (old('waist') == '60') ? 'selected' : '' }}>60</option>
<option value="61" {{ (old('waist') == '61') ? 'selected' : '' }}>61</option>
<option value="62" {{ (old('waist') == '62') ? 'selected' : '' }}>62</option>
<option value="63" {{ (old('waist') == '63') ? 'selected' : '' }}>63</option>
<option value="64" {{ (old('waist') == '64') ? 'selected' : '' }}>64</option>
<option value="65" {{ (old('waist') == '65') ? 'selected' : '' }}>65</option>
<option value="66" {{ (old('waist') == '66') ? 'selected' : '' }}>66</option>
<option value="67" {{ (old('waist') == '67') ? 'selected' : '' }}>67</option>
<option value="68" {{ (old('waist') == '68') ? 'selected' : '' }}>68</option>
<option value="69" {{ (old('waist') == '69') ? 'selected' : '' }}>69</option>
<option value="70" {{ (old('waist') == '70') ? 'selected' : '' }}>70</option>
            <option value="Above 70">Above 70</option>
          </select>
        </div>
        <br>
        <legend>Select your Gender Below:</legend>
        <div>
          <input type='radio' value='Male' id='Male' name='gender'  
          {{ (old('gender') == 'Male') ? 'checked' : '' }}>
          
          <label for='Male'> Male</label>
        </div>
        <div>
          <input type='radio' value='Female' id='Female' name='gender'
          {{ (old('gender') == 'Female') ? 'checked' : '' }}>
          <label for='Female'> Female</label>
          <!-- Adding valid gender variable as second option for old is optional for p2 -->
        </div>

        <div>
          <br>
          <button type='submit' title='Good Luck!'>Click to Calculate</button>
        </div>
        <br>
      </fieldset>

<!-- Profressor suggests red styling for errors in css -->
      @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li class='error'>{{ $error }}</li>
        @endforeach
    </ul>
      @endif

    </form>
    
<br>

@endsection
<br>