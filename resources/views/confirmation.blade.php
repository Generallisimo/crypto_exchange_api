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
							<div class="steps-exchange__text ">Send to</div>
						</li>
						<li class="steps-exchange__item active">
							<div class="steps-exchange__text">Confirmation</div>
						</li>
						<li class="steps-exchange__item">
							<div class="steps-exchange__text">Exchange</div>
						</li>
						<li class="steps-exchange__item">
							<div class="steps-exchange__text">Finish</div>
						</li>
					</ul>
				</div>
				<form action="#" method="POST" data-page-address="exchange.html" class="template__body confirmation">
					<div class="confirmation__values values-confirmation">

						<!-- SEND -->
						<section class="values-confirmation__column">
							<h2 class="values-confirmation__title template-title">
								You send
							</h2>
							<div class="values-confirmation__value template-value ">
								60.5237914 USDTTRC20
							</div>
						</section>

						<div class="values-confirmation__icon">
							<img src="img/template/arrow.svg" alt="arrow">
						</div>
						<!-- GET -->
						<section class="values-confirmation__column">
							<h2 class="values-confirmation__title template-title">
								You get
							</h2>
							<div class="values-confirmation__value template-value ">
								≈441.95135135 TRX
							</div>
						</section>
					</div>
					<section class="confirmation__address address-confirmation">
						<h2 class="address-confirmation__title template-title">
							To address
						</h2>
						<div class="address-confirmation__row">
							<div class="address-confirmation__value template-value template-value--small">
								TAMAsT6xVks3TwCviX5VwoTrtwKUwa4fi7
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
							<label for="checkbox" class="navigation-confirmation__label"><span class="navigation-confirmation__text">I've read and agree to the
									T1EX <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></span></label>
						</div>
						<button class="navigation-confirmation__button navigation-confirmation__button--back" aria-label="back">BACK</button>
						<button class="navigation-confirmation__button navigation-confirmation__button--next" aria-label="next ">NEXT</button>
					</div>
				</form>
			</div>
		</div>

	</main>
</div>

@stop