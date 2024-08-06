@extends('layouts.app')

@section('title', 'Finish')

@section('content')

<div class="wrapper">
	<main class="page">
		<div class="page__template template">
			<div class="template__container">
				<div class="template__steps  steps-exchange">
					<ul class="steps-exchange__list	">
						<li class="steps-exchange__item ">
							<div class="steps-exchange__text ">{{__('message.Send')}}</div>
						</li>
						<li class="steps-exchange__item ">
							<div class="steps-exchange__text">{{__('message.Confirmation')}}</div>
						</li>
						<li class="steps-exchange__item ">
							<div class="steps-exchange__text">{{__('message.Exchange')}}</div>
						</li>
						<li class="steps-exchange__item active">
							<div class="steps-exchange__text">{{__('message.Finish')}}</div>
						</li>
					</ul>
				</div>
				<div class="template__body finish">
					<div class="finish__column">
						<h2 class="finish__title  template-title">
							{{__('message.Congratulations')}}
						</h2>
						<div class="finish__text">
							{{__('message.CongratulationsTwo')}}
						</div>
						<div class="finish__icon check-animate">
							<svg viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 34.9091C0 25.6506 3.67791 16.7714 10.2246 10.2246C16.7714 3.67791 25.6506 0 34.9091 0H157.091C166.349 0 175.229 3.67791 181.775 10.2246C188.322 16.7714 192 25.6506 192 34.9091V157.091C192 166.349 188.322 175.229 181.775 181.775C175.229 188.322 166.349 192 157.091 192H34.9091C25.6506 192 16.7714 188.322 10.2246 181.775C3.67791 175.229 0 166.349 0 157.091V34.9091ZM34.9091 17.4545H157.091C161.72 17.4545 166.16 19.2935 169.433 22.5669C172.707 25.8402 174.545 30.2799 174.545 34.9091V157.091C174.545 161.72 172.707 166.16 169.433 169.433C166.16 172.707 161.72 174.545 157.091 174.545H34.9091C30.2799 174.545 25.8402 172.707 22.5669 169.433C19.2935 166.16 17.4545 161.72 17.4545 157.091V34.9091C17.4545 30.2799 19.2935 25.8402 22.5669 22.5669C25.8402 19.2935 30.2799 17.4545 34.9091 17.4545Z" fill="transparent" class="check-animate__border"></path>
								<path d="M80.6646 133.652L43.6348 96.6138L55.9751 84.2734L80.6646 108.954L130.026 59.584L142.375 71.9331L80.6646 133.652Z" fill="transparent" class="check-animate__arrow"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>


@stop