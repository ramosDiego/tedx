@extends('layouts.app')
<style>
	h3 {
  margin-bottom: 50px;
  text-align: center;
  text-transform: uppercase;
  font-size: 46px;
  font-weight: 200;
  line-height: 110%;
  letter-spacing: 5px; 
   }

  @media only screen and (max-width: 600px) {
	  h3
	  {
		  font-size: 46px;
		  letter-spacing: 3px; } 
  }
  h3:after {
	content: '';
	position: absolute;
	left: 50%;
	display: block;
	width: 100px;
	height: 5px;
	margin-left: -50px;
	margin-top: 35px;
	background-color: #69f0ae; }

	h2.centre-line{
	   width: 90%; 
	   border-bottom:0.1rem solid #ccc; 
	   line-height:0.1em;
	   margin:2.5rem 5%;
	   text-transform: none;
	   font-size: 30px;
	} 

	h2.centre-line span{ 
		background-color:#fff;
		padding:0 1rem;
		font-size: 30px; 
	}
	.border{
		display: flex;
		align-items: center;
		height: 400px;
		border:1px solid #3c3c3c;
		border-radius: 5px;
	}
	.borderin{
		display: flex;
		align-items: center;
		height: 300px;
		border:1px solid #3c3c3c;
		border-radius: 5px;
	}
	.bordercr{
		display: flex;
		align-items: center;
		height: 200px;
		border:1px solid #3c3c3c;
		border-radius: 5px;
	}
	.borderam{
		display: flex;
		align-items: center;
		height: 100px;
		border:1px solid #3c3c3c;
		border-radius: 5px;
	}
	.responsive-img{
		margin-bottom:15px;
	}
</style>
@section('content')

	<div class="section scrollspy" id="works">
		<div class="container">
			<div class="row">
				<h2>Aliados</h2>
			</div>
		</div>
		<div class="container">
			 <div class="row">
			   <h2 class="centre-line"><span>Transformación</span></h2>
			</div>
		 </div>
		<div class="wide-container">
		<!--<div class="wide-container">-->
			<!-- Gold -->
			<div id="shuffle-grids" class="row" style="">
				{{--@foreach($aliadosGold as $aliado)--}}
					<!--<a href="javascript:" class="col s12 m6 l4  ">
						
						{{--<h5>Heisenberg ice-cream</h5>--}}
					</a>-->
					<div class="col s12 m6 l4 center border">
	                	<div class="diamond center-block">
	                    <i class="fa fa-magic fa-5x"></i>
	                    <p>Aliado Transformación</p>
			                </div>
	                </div><div class="col s12 m6 l4 center border">
	                	<div class="diamond center-block">
	                    <i class="fa fa-magic fa-5x"></i>
	                    <p>Aliado Transformación</p>
			                </div>
	                </div>			<div class="col s12 m6 l4 center border">
	                	<div class="diamond center-block">
	                    <i class="fa fa-magic fa-5x"></i>
	                    <p>Aliado Transformación</p>
			                </div>
	                </div>
				{{--@endforeach--}}

			</div>
		</div>
		<br><br>
		<div class="container">
			 <div class="row">
			   <h2 class="centre-line"><span>Innovación</span></h2>
			</div>
		</div>
		<div class="wide-container">
		<!--Platinum-->
			<div id="shuffle-grid" class="row platinum">
				{{--@foreach($aliadosPlatimun as $aliado)--}}
					<!--<a href="javascript:" class="col s6 m4 l3">
						
						{{--<h5>Heisenberg ice-cream</h5>--}}
					</a>-->
					<div class="col s6 m4 l3 center borderin">
	                	<div class="diamond center-block">
	                    <i class="fa fa-flask fa-5x"></i>
	                    <p>Aliado innovacion</p>
			            </div>
	                </div><div class="col s6 m4 l3 center borderin">
	                	<div class="diamond center-block">
	                    <i class="fa fa-flask fa-5x"></i>
	                    <p>Aliado innovacion</p>
			            </div>
	                </div><div class="col s6 m4 l3 center borderin">
	                	<div class="diamond center-block">
	                    <i class="fa fa-flask fa-5x"></i>
	                    <p>Aliado innovacion</p>
			            </div>
	                </div><div class="col s6 m4 l3 center borderin">
	                	<div class="diamond center-block">
	                    <i class="fa fa-flask fa-5x"></i>
	                    <p>Aliado innovacion</p>
			            </div>
	                </div>
				{{--@endforeach--}}
			</div>
		</div>
		<div class="container">
			 <div class="row">
			   <h2 class="centre-line"><span>Creatividad</span></h2>
			</div>
		</div>
		<div class="wide-container">
			<div id="shuffle-grid" class="row amigos">
				{{--@foreach($aliadosAmigos as $aliado)--}}
					<!--<a href="javascript:" class="col s4 m2 l2">
						
						{{--<h5>Heisenberg ice-cream</h5>--}}
					</a>-->
					<div class="col s4 m2 l2 center bordercr">
	                	<div class="diamond center-block">
	                    <i class="fa fa-lightbulb-o fa-5x"></i>
	                    <p>Aliado creatividad</p>
			            </div>
	                </div><div class="col s4 m2 l2 center bordercr">
	                	<div class="diamond center-block">
	                    <i class="fa fa-lightbulb-o fa-5x"></i>
	                    <p>Aliado creatividad</p>
			            </div>
	                </div><div class="col s4 m2 l2 center bordercr">
	                	<div class="diamond center-block">
	                    <i class="fa fa-lightbulb-o fa-5x"></i>
	                    <p>Aliado creatividad</p>
			            </div>
	                </div><div class="col s4 m2 l2 center bordercr">
	                	<div class="diamond center-block">
	                    <i class="fa fa-lightbulb-o fa-5x"></i>
	                    <p>Aliado creatividad</p>
			            </div>
	                </div><div class="col s4 m2 l2 center bordercr">
	                	<div class="diamond center-block">
	                    <i class="fa fa-lightbulb-o fa-5x"></i>
	                    <p>Aliado creatividad</p>
			            </div>
	                </div><div class="col s4 m2 l2 center bordercr">
	                	<div class="diamond center-block">
	                    <i class="fa fa-lightbulb-o fa-5x"></i>
	                    <p>Aliado creatividad</p>
			            </div>
	                </div>
				{{--@endforeach--}}
			</div>
		</div>
		<div class="container">
			 <div class="row">
			   <h2 class="centre-line"><span>Aliado</span></h2>
			</div>
		</div>
		<div class="wide-container">
			<div id="shuffle-grid" class="row amigos">
				{{--@foreach($aliadosAmigos as $aliado)--}}
					<!--<a href="javascript:" class="col s2 m1 l1">
						
						
						{{--<h5>Heisenberg ice-cream</h5>--}}
					</a>-->
					<div class="col s4 m2 l2 center borderam">
	                	<div class="diamond center-block">
	                    <i class="fa fa-heart fa-2x"></i>
	                    <p>Aliado </p>
			            </div>
	                </div><div class="col s4 m2 l2 center borderam">
	                	<div class="diamond center-block">
	                    <i class="fa fa-heart fa-2x"></i>
	                    <p>Aliado </p>
			            </div>
	                </div><div class="col s4 m2 l2 center borderam">
	                	<div class="diamond center-block">
	                    <i class="fa fa-heart fa-2x"></i>
	                    <p>Aliado </p>
			            </div>
	                </div><div class="col s4 m2 l2 center borderam">
	                	<div class="diamond center-block">
	                    <i class="fa fa-heart fa-2x"></i>
	                    <p>Aliado </p>
			            </div>
	                </div><div class="col s4 m2 l2 center borderam">
	                	<div class="diamond center-block">
	                    <i class="fa fa-heart fa-2x"></i>
	                    <p>Aliado </p>
			            </div>
	                </div><div class="col s4 m2 l2 center borderam">
	                	<div class="diamond center-block">
	                    <i class="fa fa-heart fa-2x"></i>
	                    <p>Aliado </p>
			            </div>
	                </div>
				{{--@endforeach--}}
			</div>
		</div>
	</div>
@endsection
