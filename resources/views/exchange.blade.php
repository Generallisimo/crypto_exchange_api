@extends('layouts.app')

@section('title', '')

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
						<li class="steps-exchange__item ">
							<div class="steps-exchange__text">Confirmation</div>
						</li>
						<li class="steps-exchange__item active">
							<div class="steps-exchange__text">Exchange</div>
						</li>
						<li class="steps-exchange__item">
							<div class="steps-exchange__text">Finish</div>
						</li>
					</ul>
				</div>
				<form action="#" method="POST" data-dev class="template__body change">
					<section class="change__indification indification-change ">
						<h2 class="indification-change__title template-title">
							Exchange ID:
						</h2>
						<div class="indification-change__value">
							<div class="indification-change__text template-value ">
								{{$exchangeID}}
							</div>
							<button class="indification-change__button" aria-label="copy address ">
								<img src="img/template/copy.svg" alt="copy">
							</button>
						</div>
					</section>

					<section class="change__awaiting awaiting-change">
						<div class="awaiting-change__column">
							<h2 class="awaiting-change__title template-value">
								Awaiting deposit
							</h2>
							<div class="awaiting-change__item">
								<h3 class="awaiting-change__subtitle template-subtitle ">
									You send
								</h3>
								<div class="awaiting-change__value  template-value">
								{{$exchangeForm['send-coins-value'] }} {{$exchangeForm['send-coins-option']}}
								</div>
							</div>
							<div class="awaiting-change__item">
								<h3 class="awaiting-change__subtitle template-subtitle ">
									To address
								</h3>
								<div class="awaiting-change__row">
									<div class="awaiting-change__value  template-value template-value--small">
									{{$exchangeForm['payout-exchange'] }}
									</div>
									<div class="awaiting-change__actions actions">
										<button class="actions__button actions__button--copy" aria-label="copy address ">
											<img src="img/template/copy.svg" alt="copy">
										</button>
										<button class="actions__button actions__button--send" aria-label="send address ">
											<img src="img/template/send.svg" alt="send">
										</button>
									</div>
								</div>
							</div>
						</div>

						<div class="awaiting-change__qrcode">
							<picture>
								<source srcset="img/template/qrcode.webp" type="image/webp"><img src="img/template/qrcode.jpg" alt="qrcode">
							</picture>
						</div>

					</section>
					<section class="change__get get-change">
						<div class="get-change__column">
							<h3 class="get-change__subtitle template-subtitle ">
								You get
							</h3>
							<div class="get-change__value  template-value">
							{{$exchangeForm['get-coins-value'] }} {{$exchangeForm['get-coins-option']}}
							</div>

							<h3 class="get-change__subtitle template-subtitle ">
								Recipient's address:
							</h3>
							<div class="get-change__row">
								<div class="get-change__value  template-value template-value--small">
									TAMAsT6xVks3TwCviX5VwoTrtwKUwa4fi7
								</div>
								<div class="get-change__actions actions">
									<button class="actions__button actions__button--copy" aria-label="copy address ">
										<img src="img/template/copy.svg" alt="copy">
									</button>
									<button class="actions__button actions__button--send" aria-label="send address ">
										<img src="img/template/send.svg" alt="send">
									</button>
								</div>
							</div>
						</div>
						<button class="get-change__button" aria-label="Support ">Support</button>
					</section>
				</form>


			</div>
		</div>

	</main>
</div>

@stop