<div class="col-md-5 col-md-offset-1">
	<h1>Form Collective</h1><br>


    {!! Form::open([
					'url' 	=> 'action',
					'class' => 'form-horizontal',
					'method'=> 'get',
					'files' => true	
    			]) 
   	!!}

   	{!! Form::token() !!}	

	<!-- label -->
	{!! Form::label('hidden', 'Type Hidden', ['class' => 'label-control']) !!}
	<!-- hidden -->
	{!! Form::hidden('hidden', 'Type Hidden', ['class' => 'form-control']) !!}

	<!-- label -->
	{!! Form::label('password', 'Type Password', ['class' => 'label-control']) !!}
	<!-- password -->
	{!! Form::password('password', ['class' => 'form-control']) !!}

	<!-- label -->
	{!! Form::label('email', 'Type Email', ['class' => 'label-control']) !!}
	<!-- email -->
	{!! Form::email('email', '', [
									'class' => 'form-control',
									'placeholder' => 'Type Email'
								]) !!}


	<!-- label -->
	{!! Form::label('text', 'Type Text', ['class' => 'label-control']) !!}
	<!-- text -->
	{!! Form::text('text', 'Type Text', ['class' => 'form-control']) !!}	

	<!-- label -->
	{!! Form::label('password', 'Type Password', ['class' => 'label-control']) !!}
	<!-- textarea -->
	{!! Form::textarea('textarea', '', ['class' => 'form-control']) !!}

	<!-- label -->
	{!! Form::label('checkbox', 'Type Checkbox', ['class' => 'label-control']) !!}
	<!-- checkbox -->
	{!! Form::checkbox('checkbox', 'Type Checkbox', true, ['class' => 'form-control']) !!} 
	Checkbox <br>

	<!-- label -->
	{!! Form::label('radio', 'Type Radio', ['class' => 'label-control']) !!}
	<!-- radio -->
	{!! Form::radio('radio', 'Type Radio', true, ['class' => 'form-control']) !!}
   	Radio <br>

   	<!-- label -->
	{!! Form::label('number', 'Type Number', ['class' => 'label-control']) !!}
   	<!-- number -->
	{!! Form::number('number', '', [
										'class' => 'form-control',
										'placeholder' => 'Type Number'
									]) !!}   	

	<!-- label -->
	{!! Form::label('date', 'Type Date', ['class' => 'label-control']) !!}
	<!-- date -->
	{!! Form::date('date', '', ['class' => 'form-control']) !!}
   	
   	<!-- label -->
	{!! Form::label('file', 'Type File', ['class' => 'label-control']) !!}
	<!-- file -->
	{!! Form::file('file', ['class' => 'form-control']) !!}

	<!-- label -->
	{!! Form::label('select', 'Type Select', ['class' => 'label-control']) !!}
	<!-- select -->
	{!! Form::select('select', [
								'selectA' => 'Select A',
								'selectB' => 'Select B',
							], 'selectA',
							[
								'placeholder' => 'Select',
								'class'		  => 'form-control'
							]) 
	!!}

	<!-- label -->
	{!! Form::label('range', 'Type Range', ['class' => 'label-control']) !!}
	<!-- range -->
	{!! Form::selectRange('range', 10, 20, '', ['class' => 'form-control']) !!}

	<!-- label -->
	{!! Form::label('month', 'Type Month', ['class' => 'label-control']) !!}
   	<!-- month -->
	{!! Form::selectMonth('month', '', ['class' => 'form-control']) !!}
   	
	
   	{!! Form::close() !!}



</div>
