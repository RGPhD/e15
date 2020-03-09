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
    <form method='GET' action='forms'>
      <fieldset>
        <legend>ENTER YOUR INFORMATION</legend>
        <br>
        <div>
        <legend><label for='hips'>Enter your Hip Circumference in Inches Below:</label> </legend>
          <input type='text' id='hips' placeholder='Enter your Hip size in Inches'>
        </div>

        <br>

        <legend>Select your Waist Circumference Below:</legend>
        <div>
          <label for="waist"> Select Inches (10-70 inches)</label>

          <select id="waist">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
            <option value="60">60</option>
            <option value="61">61</option>
            <option value="62">62</option>
            <option value="63">63</option>
            <option value="64">64</option>
            <option value="65">65</option>
            <option value="66">66</option>
            <option value="67">67</option>
            <option value="68">68</option>
            <option value="69">69</option>
            <option value="70">70</option>
          </select>
        </div>
        <br>
        <legend>Select your Gender Below:</legend>
        <div>
          <input type='radio' value='Male' id='Male' name='gender'>
          <label for='Male'> Male</label>
        </div>
        <div>
          <input type='radio' value='Female' id='Female' name='gender'>
          <label for='Female'> Female</label>
        </div>

        <div>
          <br>
          <button type='submit' title='Good Luck!'>Click to Calculate</button>
        </div>
        <br>
      </fieldset>
    </form>
    <br>
@endsection