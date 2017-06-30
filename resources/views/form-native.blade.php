<div class="col-md-5">
	<h1>Form Native</h1><br>


    <form   action  ="" 
            method  ="post" 
            class   ="form-horizontal"
        >
    {{ csrf_field() }}
        
    <!-- label -->
    <label  id="hidden" 
            class="label-control">
            Type Hidden
    </label>
    <!-- hidden -->
    <input  type="hidden" 
            name="" 
            placeholder="Type Hidden" 
            class="form-control">

    <!-- label -->
    <label  id="password" 
            class="label-control">
            Type Password
    </label>
    <!-- password -->
    <input  type="password" 
            name=""
            class="form-control">

    <!-- label -->
    <label  id="email" 
            class="label-control">
            Type Email
    </label>
    <!-- email -->
    <input  type="email" 
            name="email" 
            placeholder="Type Email" 
            class="form-control">

    <!-- label -->
    <label  id="text" 
            class="label-control">
            Type Text
    </label>
    <!-- text -->
    <input  type="text" 
            name=""
            placeholder="Type Text" 
            class="form-control">    

    <!-- label -->
    <label  id="textarea" 
            class="label-control">
            Type Textarea
    </label>
    <!-- textarea -->
    <textarea   name="" 
                id="" 
                cols="30" 
                rows="10"
                class="form-control">
    </textarea>

    <!-- label -->
    <label  id="checkbox" 
            class="label-control">
            Type Checkbox
    </label>
    <!-- checkbox -->
    <input  type="checkbox"
            name=""
            checked="checked" 
            class="form-control"> Checkbox <br>

    <!-- label -->
    <label  id="radio" 
            class="label-control">
            Type Radio
    </label>
    <!-- radio -->
    <input  type="radio"
            name="" 
            checked="checked" 
            class="form-control"> Radio <br>

    <!-- label -->
    <label  id="number" 
            class="label-control">
            Type Number
    </label>
    <!-- number -->
    <input  type="number"
            name="" 
            placeholder="Type Number" 
            class="form-control">

    <!-- label -->
    <label  id="date" 
            class="label-control">
            Type Date
    </label>
    <!-- date -->
    <input  type="date"
            name="" 
            class="form-control">

    <!-- label -->
    <label  id="file" 
            class="label-control">
            Type File
    </label>
    <!-- file -->
    <input  type="file"
            name="" 
            class="form-control">

    <!-- label -->
    <label  id="select" 
            class="label-control">
            Type Select
    </label>
    <!-- select -->
    <select name=""
            class="form-control">
            <option value="selectA" selected>Select A</option>            
            <option value="selectB">Select B</option>            
    </select>    

    <!-- label -->
    <label  id="range" 
            class="label-control">
            Type Range
    </label>
    <!-- range -->
    <input  type="range"
            name="" 
            class="form-control">    

    <!-- label -->
    <label  id="month" 
            class="label-control">
            Type Month
    </label>
    <!-- month -->
    <input  type="month"
            name="" 
            class="form-control">
    
    </form>


</div>
