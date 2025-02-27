@extends('layouts.app')

@section('title', 'Confirmation')

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
						<li class="steps-exchange__item active">
							<div class="steps-exchange__text">{{__('message.Confirmation')}}</div>
						</li>
						<li class="steps-exchange__item">
							<div class="steps-exchange__text">{{__('message.Exchange')}}</div>
						</li>
						<li class="steps-exchange__item">
							<div class="steps-exchange__text">{{__('message.Finish')}}</div>
						</li>
					</ul>
				</div>
				<form action="{{route('exchangeGet', ['id' => $exchangeID])}}" method="POST" data-page-address="{{route('exchange', ['id' => $exchangeID])}}" class="template__body confirmation">
					@csrf
					<div class="confirmation__values values-confirmation">

						<!-- SEND -->
						<section class="values-confirmation__column">
							<h2 class="values-confirmation__title template-title">
								{{__('message.YSend')}}
							</h2>
							<div class="values-confirmation__value template-value ">
								{{$exchangeForm['send-coins-value'] ?? $exchangeForm['send-money-value']  }} {{$exchangeForm['send-coins-option'] ?? $exchangeForm['send-money-option']}}
							</div>
						</section>

						<div class="values-confirmation__icon">
							<img src="img/template/arrow.svg" alt="arrow">
						</div>
						<!-- GET -->
						<section class="values-confirmation__column">
							<h2 class="values-confirmation__title template-title">
								{{__('message.YGet')}}
							</h2>
							<div class="values-confirmation__value template-value ">
								{{$exchangeForm['get-coins-value'] ?? $exchangeForm['get-buy-value'] }} {{$exchangeForm['get-coins-option'] ?? $exchangeForm['get-buy-option']}}
							</div>
						</section>
					</div>
					<section class="confirmation__address address-confirmation">
						<h2 class="address-confirmation__title template-title">
							{{__('message.TOAddress')}}
						</h2>
						<div class="address-confirmation__row">
							<div class="address-confirmation__value template-value template-value--small">
							{{$exchangeForm['payout-exchange'] ?? $exchangeForm['payout-buy'] }}
							</div>
							<div class="address-confirmation__actions actions">
								<button class="actions__button actions__button--copy" aria-label="copy address ">
									<img src="img/template/copy.svg" alt="copy">
								</button>
								<button class="actions__button actions__button--send" aria-label="send address ">
									<img src="img/template/send.svg" alt="send">
								</button>
							</div>
						</div>
					</section>

					<div class="confirmation__navigation navigation-confirmation">
						<div class="navigation-confirmation__checkbox">
							<input id="checkbox" data-error="Помилка" class="navigation-confirmation__input" type="checkbox" value="1" name="checkbox">
							<label for="checkbox" class="navigation-confirmation__label"><span class="navigation-confirmation__text">{{__('message.DecidedOne')}}
									T1EX <a href="#">{{__('message.DecidedTwo')}}</a> {{__('message.DecidedFour')}} <a href="#">{{__('message.DecidedThree')}}</a></span></label>
						</div>
						<a href="{{route('change')}}"  class="navigation-confirmation__button navigation-confirmation__button--back">BACK</a>
						<button class="navigation-confirmation__button navigation-confirmation__button--next" aria-label="next ">NEXT</button>
						<div class="status-message"></div>
					</div>
				</form>
			</div>
		</div>

	</main>
</div>


<script>
        document.addEventListener('DOMContentLoaded', function() {
            const transactionId = '{{ $exchangeID }}';
            const nextButton = document.querySelector('.navigation-confirmation__button--next');
            const statusMessage = document.querySelector('.status-message');

            function checkTransactionStatus() {
                fetch(`/confirm-status/${transactionId}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.confirmed) {
                            nextButton.disabled = false;
							nextButton.style.backgroundColor = '#9a85b5';
                            statusMessage.textContent = "{{__('message.JSCre')}}";
                        } else {
                            nextButton.disabled = true;
							nextButton.style.backgroundColor = 'grey';
                            statusMessage.textContent = " {{__('message.JSGen')}}";
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
            setInterval(checkTransactionStatus, 2000);

            checkTransactionStatus();
        });
</script>

@stop