@extends("layouts/default")

@section("head")
<style>

input.contact-input{
  border: thin solid #808aa3;
  padding:5px 10px;
  margin-bottom: 18px;
}

.aieDropDownList{
  border: thin solid #808aa3;
  padding:0px 10px;
  margin-bottom: 18px;
}

.progress-bar {
  text-align: center;
}

.select-wrapper input.select-dropdown {
  border-bottom: none;
  margin: 5px 0;
}

</style>

@endsection

@section("content")
<main>
  <div class="container">
    <div class="row">
      <h4 class="faq-header" style="font-weight:300">BOOK AN APPOINTMENT</h4>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s4 m4 l4 progress-bar">
        STEP 1: BOOKING
      </div>
      <div class="col s4 m4 l4 progress-bar">
        STEP 2: YOUR INFO
      </div>
      <div class="col s4 m4 l4 progress-bar">
        STEP 3: CONFIRMATION
      </div>
      <br/>
      <div class="progress">
        <div class="determinate" style="width: 0%"></div>
      </div>
    </div>
  </div>

  <div class="container">
     <div class="row">
       <form class="book-form col s12">
         <div class="row">
           <div class="input-field col s12">
             <input name="name" class="input-box" type="text" class="validate" placeholder="Name">
           </div>
           <div class="input-field col s12">
             <input name="companyname" class="input-box" type="text" class="validate" placeholder="Company Name">
           </div>
           <div class="input-field col s12 m6">
             <input name="contact" class="input-box" type="text" class="validate" placeholder="Contact No.">
           </div>
           <div class="input-field col s12 m6">
             <input name="email" class="input-box" type="text" class="validate" placeholder="Email">
           </div>
           <div class="input-field col s12">
                 <textarea class="form-textarea contact-ta"  type="text" placeholder="Leave a Message"  rows="5" required></textarea>
              </div>
           <div class="input-field col s12 center">
              <button class="btn btn-theme" type="submit">Send Message</button>
           </div>
         </div>
       </form>
     </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="contact-form">
        <form class="">
          <div class="input-field center">
            <input class="contact-input input-box" type="date" class="datepicker" placeholder="Select Date">
          </div>
          <div class="input-field center">
            <select class="aieDropDownList">
              <option value="" disabled selected>Select Arrival Time</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
          <div class="input-field center">
            <select class="aieDropDownList">
              <option value="" disabled selected>Service Type</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
          <div class="input-field col m6" style="margin-left:-10px">
            <select class="aieDropDownList">
              <option value="" disabled selected>A/C Type</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
          <div class="input-field col m6">
            <input class="contact-input input-box" type="text" placeholder="Qty" style="margin-left:10px">
          </div>
          <div class="input-field center">
            <textarea class="form-textarea contact-ta"  type="text" placeholder="Additional Notes"  rows="5" required></textarea>
          </div>
          <div class="input-field center">
            <button class="btn btn-submit contact-submit"> NEXT STEP </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@stop

@section("scripts")
<script>
$(document).ready(function() {
  $('select').material_select();

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
});
</script>
@stop
