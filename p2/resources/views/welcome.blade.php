@extends('layouts.master')

@section('content')
<h1>Welcome to My P2 App - Beyond BMI</h1>
<h2>Abdominal Obesity and Your Health</h2>

    <h2>Instructions</h2>
    <ul>
      <li>Enter your Name.</li>
      <li>Enter your Waist Circumference.</li>
      <li>Select your Hip Circumference.</li>
      <li>Select your Gender.</li>
      <li>Select your Height.</li>
      <li>Click the Calculate Button to reveal your Results!</li>
    </ul>

    <h2>Calculate your WTH Ratio and Abdominal Obesity Risk</h2>
    <!-- Using GET default method -->
    <form method='GET' action='process.php'>
      <fieldset>
        <legend>ENTER YOUR INFORMATION</legend>
        <div>
          <label for='name'>Name</label>
          <input type='text' id='name' name='name' placeholder='Enter your name' autofocus>
<!-- Using placeholder because it lets users click at the beginning of the text box instead of value attribute. Although value does have more visible text. -->
        </div>

        <br>
        <div>
          <label for='waist'>Enter your Waist Circumference Below:</label> <br>
          <textarea rows="2" cols="50" name="waist" id='waist' placeholder='Enter your Waist Circumference in inches'>
</textarea>
        </div>

        <div>
          <label for='hips'>Select your Hip Circumference Below:</label> <br>
          <input type='text' id='hips' placeholder='Select your Hip Circumference'>
        </div>

        <br>
        <legend>Select your Gender</legend>
        <div>
          <input type='radio' value='Chicago' id='Chicago' name='team'>
          <label for='Chicago'> Male</label>
        </div>
        <div>
          <input type='radio' value='Kansas' id='Kansas' name='team'>
          <label for='Kansas'> Female</label>
        </div>
        <br>

        <legend>Select your Height below:</legend>
        <div>
        <label for="inches">Select inches</label>

<select id="inches">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">10</option>
  <option value="3">11</option>
  <option value="2">12</option>
  <option value="3">13</option>
  <option value="4">14</option>
  <option value="5">15</option>
  <option value="6">16</option>
  <option value="7">17</option>
  <option value="8">18</option>
  <option value="1">19</option>
  <option value="2">20</option>
<option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">30</option>
<option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">40</option>
<option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">50</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">60</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">70</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">80</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">90</option>
<option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">100</option>
<option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="1">9</option>
  <option value="2">110</option>
</select>
        </div>

        <div>
        <br>
          <button type='submit' title='Good Luck!'>Click to Calculate</button>
        </div>
      </fieldset>
    </form>
@endsection