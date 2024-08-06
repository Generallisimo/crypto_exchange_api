@extends('layouts.app')

@section('title', 'Change')

@section('content')

<div class="wrapper">
	<main class="page">
		<section class="page__exchange exchange">
			<div class="exchange__container">
				<h1 class="exchange__title  title title--center">
					<span>{{__('message.Best')}} crypto</span> {{__('message.ExchangeTwo')}}
				</h1>
				<div data-tabs class="exchange__wrapper">
					<div data-tabs-titles class="exchange__header header-exchange">
						<button class="header-exchange__button _tab-active"><span>Crypto {{__('message.Exchange')}}</span></button>
						<!-- <button class="header-exchange__button"><span>Buy Crypto</span></button> -->
					</div>
					<div class="exchange__steps steps-exchange">
						<ul class="steps-exchange__list	">
						<!-- <p>Current Locale: {{ App::getLocale() }}</p> -->
							<li class="steps-exchange__item active">
								<div class="steps-exchange__text ">{{__('message.Send')}}</div>
							</li>
							<li class="steps-exchange__item">
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
					<div data-tabs-body class="exchange__tabs">
						<!-- Crypto Exchange -->
						<form method="POST" action="{{ route('sendForm') }}"  data-page-address="{{route('sendForm')}}" id="exchangeForm"  class="exchange__main exchange__main--change">
							@CSRF
							<div class="exchange__body body-exchange">
								<div class="body-exchange__row ">
									<label class="body-exchange__label" for="send-coins-value"> {{__('message.YSend')}}</label>
									<input autocomplete="off" type="number" id="send-coins-value" name="send-coins-value" placeholder="0.1" required class="body-exchange__input ">
									<div class=" body-exchange__select select">
										<div class="select__button select__button1">
											<div class="select__icon">
												<img src="img/change/BTC.svg" alt="BTC">
											</div>
											<input class="select__value select__value1" value="BTC" placeholder="BTC" type="text" id="send-coins-option" name="send-coins-option">
										</div>
										<div class="select__wrapper select__wrapper1">
											<div class="select__search">
												<button type="button" class="select__search-icon" aria-label="search button">
													<img src="img/change/search.svg" alt="search">
												</button>
												<input class="select__input" spellcheck="false" type="text" placeholder="Type a currency or ticker">
												<button type="button" class="select__search-close" aria-label="close search button">
													<img src="img/change/cross.svg" alt="cross">
												</button>
											</div>
											<div class="select__body">
												<div class="select__title">
												{{__('message.PopCurrency')}}
												</div>
												<ul class="select__options option">
													<li class="option__item">
														<div class="option__caption">
															Bitcoin
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/BTC.svg" alt="BTC">
															</div>
															<div class="option__label">
																BTC
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															USDT
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/USDT.svg" alt="USDT">
															</div>
															<div class="option__label">
																USDT
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Moreno
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/XMR.svg" alt="XMR">
															</div>
															<div class="option__label">
																XMR
															</div>
														</div>
													</li>
												</ul>
												<div class="select__title">
												{{__('message.OtherCurrency')}}
												</div>
												<ul class="select__options option">
													<li class="option__item">
														<div class="option__caption">
															Alfa
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Alfa.svg" alt="Alfa">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Raiffeisen
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Raiffeisen.svg" alt="Raiffeisen">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Sberbank
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Sber.svg" alt="Sber">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Tinkoff
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Tinkoff.svg" alt="Tinkoff">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															SBP
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/sbp.svg" alt="sbp">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Visa/Master Card
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/visa.svg" alt="visa">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Private24
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Privat24.svg" alt="Privat24">
															</div>
															<div class="option__label">
																UAH
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Monobank
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Mono.svg" alt="Mono">
															</div>
															<div class="option__label">
																UAH
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="body-exchange__rate  rate-exchange">
									<input class="rate-exchange__input" hidden type="text">
									<div class="rate-exchange__safe">
										<img src="img/change/unlock.svg" alt="unlock">
									</div>
									<div class="rate-exchange__description">
									{{__('message.FloRate')}}
									</div>
									<div class="rate-exchange__arrow">
										<img src="img/change/exchange.svg" alt="change">
									</div>
								</div>

								<div class="body-exchange__row">
									<label class="body-exchange__label" for="get-coins-value">{{__('message.YGet')}}</label>
									<input autocomplete="off" type="" id="get-coins-value" name="get-coins-value" placeholder="≈1.81059138" style="pointer-events:all" class="body-exchange__input">
									<div class=" body-exchange__select select">
										<div class="select__button select__button2">
											<div class="select__icon">
												<img src="img/change/XMR.svg" alt="XMR">
											</div>
											<input class="select__value select__value2" value="XMR" placeholder="XMR" type="text" name="get-coins-option" id="get-coins-option">
										</div>
										<div class="select__wrapper select__wrapper2">
											<div class="select__search">
												<button type="button" class="select__search-icon" aria-label="search button">
													<img src="img/change/search.svg" alt="search">
												</button>
												<input class="select__input" spellcheck="false" type="text" placeholder="Type a currency or ticker">
												<button type="button" class="select__search-close" aria-label="close search button">
													<img src="img/change/cross.svg" alt="cross">
												</button>
											</div>
											<div class="select__body">
												<div class="select__title">
													{{__('message.PopCurrency')}}
												</div>
												<ul class="select__options option">
													<li class="option__item">
														<div class="option__caption">
															Bitcoin
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/BTC.svg" alt="BTC">
															</div>
															<div class="option__label">
																BTC
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															USDT
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/USDT.svg" alt="USDT">
															</div>
															<div class="option__label">
																USDT
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Moreno
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/XMR.svg" alt="XMR">
															</div>
															<div class="option__label">
																XMR
															</div>
														</div>
													</li>
												</ul>
												<div class="select__title">
													{{__('message.OtherCurrency')}}
												</div>

												<ul class="select__options option">
													<li class="option__item">
														<div class="option__caption">
															Alfa
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Alfa.svg" alt="Alfa">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Raiffeisen
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Raiffeisen.svg" alt="Raiffeisen">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Sberbank
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Sber.svg" alt="Sber">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Tinkoff
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Tinkoff.svg" alt="Tinkoff">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															SBP
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/sbp.svg" alt="sbp">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Visa/Master Card
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/visa.svg" alt="visa">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Private24
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Privat24.svg" alt="Privat24">
															</div>
															<div class="option__label">
																UAH
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Monobank
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Mono.svg" alt="Mono">
															</div>
															<div class="option__label">
																UAH
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="body-exchange__row body-exchange__row--alert">
									<div class="body-exchange__column form-row ">
										<input autocomplete="off" id="payout-exchange" name="payout-exchange" placeholder="{{__('message.Address')}}" class=" form-row__input" data-validate required data-required data-error="Address is invalid">
										<label class=" form-row__label" for="payout-exchange">{{__('message.Address')}}</label>
										<div class="body-exchange__alert">{{__('message.AddressDown')}}</div>
									</div>
									<button class="body-exchange__button" type="submit">{{__('message.Next')}}</button>
								</div>
								<!-- <div data-spollers class="body-exchange__spollers spollers-exchange">
									<details class="spollers-exchange__item">
										<summary class="spollers-exchange__title">Refund address</summary>
										<div class="spollers-exchange__body">
											<div class="spollers-exchange__row form-row">
												<input autocomplete="off" type="number" id="refund-exchange" name="refund-exchange" placeholder="Enter BTC refund address (optional)" class=" form-row__input">
												<label class="form-row__label" for="refund-exchange">
													Enter BTC refund address(optional)
												</label>
											</div>
										</div>
									</details>
								</div> -->
							</div>
						</form>
						<!-- Buy Crypto -->
						<!-- <form method="POST" action="{{ route('sendFormBuy') }}"  data-page-address="{{route('sendFormBuy')}}" class="exchange__main  exchange__main--buy">
						@csrf
							<div class="exchange__body body-exchange">
								<div class="body-exchange__row ">
									<label class="body-exchange__label" for="send-money-value"> You send</label>
									<input autocomplete="off" type="number" id="send-money-value" name="send-money-value" placeholder="100" required data-required class="body-exchange__input ">
									<div class=" body-exchange__select select">
										<div class="select__button select__button3 ">
											<div class="select__icon">
												<img src="img/change/Alfa.svg" alt="RUB">
											</div>

											<input class="select__value select__value3" value="RUB" placeholder="RUB" type="text" name="send-money-option" id="send-money-option">
										</div>
										<div class="select__wrapper select__wrapper3">
											<div class="select__search">
												<button type="button" class="select__search-icon" aria-label="search button">
													<img src="img/change/search.svg" alt="search">
												</button>
												<input class="select__input" spellcheck="false" type="text" placeholder="Type a currency or ticker">
												<button type="button" class="select__search-close" aria-label="close search button">
													<img src="img/change/cross.svg" alt="cross">
												</button>
											</div>
											<div class="select__body">
												<div class="select__title">
													Fiat currencies
												</div>
												<ul class="select__options option">
													<li class="option__item">
														<div class="option__caption">
															Alfa
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Alfa.svg" alt="Alfa">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Raiffeisen
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Raiffeisen.svg" alt="Raiffeisen">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Sberbank
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Sber.svg" alt="Sber">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Tinkoff
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Tinkoff.svg" alt="Tinkoff">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															SBP
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/sbp.svg" alt="sbp">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Visa/Master Card
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/visa.svg" alt="visa">
															</div>
															<div class="option__label">
																RUB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Private24
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Privat24.svg" alt="Privat24">
															</div>
															<div class="option__label">
																UAH
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Monobank
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/Mono.svg" alt="Mono">
															</div>
															<div class="option__label">
																UAH
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="body-exchange__rate  rate-exchange">
									<input class="rate-exchange__input" hidden type="text">
									<div class="rate-exchange__safe">
										<img src="img/change/unlock.svg" alt="unlock">
									</div>
									<div class="rate-exchange__description">
										Floating rate
									</div>
									<div class="rate-exchange__arrow">
										<img src="img/change/exchange.svg" alt="change">
									</div>
								</div>

								<div class="body-exchange__row">
									<label class="body-exchange__label" for="get-buy-value">You get</label>
									<input autocomplete="off"  id="get-buy-value" name="get-buy-value" placeholder="≈0.00129786" class="body-exchange__input">
									<div class=" body-exchange__select select">
										<div class="select__button select__button4">
											<div class="select__icon">
												<img src="img/change/BTC.svg" alt="BTC">
											</div>
											<input class="select__value select__value4" value="BTC" placeholder="BTC" type="text" name="get-buy-option" id="get-buy-option">
										</div>
										<div class="select__wrapper select__wrapper4">
											<div class="select__search">
												<button type="button" class="select__search-icon" aria-label="search button">
													<img src="img/change/search.svg" alt="search">
												</button>
												<input class="select__input" spellcheck="false" type="text" placeholder="Type a currency or ticker">
												<button type="button" class="select__search-close" aria-label="close search button">
													<img src="img/change/cross.svg" alt="cross">
												</button>
											</div>
											<div class="select__body">
												<div class="select__title">
													Popular currencies
												</div>
												<ul class="select__options option">
													<li class="option__item">
														<div class="option__caption">
															Bitcoin
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/BTC.svg" alt="BTC">
															</div>
															<div class="option__label">
																BTC
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															USDT
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/USDT.svg" alt="USDT">
															</div>
															<div class="option__label">
																USDT
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Moreno
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/XMR.svg" alt="XMR">
															</div>
															<div class="option__label">
																XMR
															</div>
														</div>
													</li>
												</ul>
												<div class="select__title">
													Other currencies
												</div>
												<ul class="select__options option">
													<li class="option__item">
														<div class="option__caption option__caption--new ">
															BabyDoge
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/BABYDOGE.svg" alt="BABYDOGE">
															</div>
															<div class="option__label">
																BDG
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Algorand
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/ALGO.svg" alt="ALGO">
															</div>
															<div class="option__label">
																ALG
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

								</div>
								<div class="body-exchange__title">
									Avaible offers
								</div>

								<div class="body-exchange__row body-exchange__row--alert">
									<div class="body-exchange__column form-row">
										<input autocomplete="off" type="number" id="payout-buy" name="payout-buy" placeholder="Enter the recipient’s address" class=" form-row__input" data-validate required data-required data-error="Address is invalid">
										<label class=" form-row__label" for="payout-buy">Enter the recipient’s
											address</label>
										<div class="body-exchange__alert">Do not provide a smart contract as your payout address</div>
									</div>
									<button class="body-exchange__button" type="submit">NEXT</button>
								</div>

								<div class="body-exchange__options  options">
									<div class="options__item">
										<input id="mercuryo" class="options__input" checked type="radio" value="mercuryo" name="payment">
										<label for="mercuryo" class="options__label">
											<picture>
												<source srcset="img/change/mercuryo.webp" type="image/webp"><img src="img/change/mercuryo.png" alt="mercuryo">
											</picture>
										</label>
										<div class="options__content">
											<div class="options__value">
												≈0.00129786 BTC
											</div>
											<div class="options__row">
												<img src="img/change/visa.svg" alt="visa">
												<img src="img/change/mastercard.svg" alt="mastercard">
											</div>
										</div>
									</div>
									<div class="options__item">
										<input id="simplex" class="options__input" type="radio" value="simplex" name="payment">
										<label for="simplex" class="options__label">
											<picture>
												<source srcset="img/change/simplex.webp" type="image/webp"><img src="img/change/simplex.png" alt="simplex">
											</picture>
										</label>
										<div class="options__content">
											<div class="options__value">
												≈0.00123582BTC
											</div>
											<div class="options__row">
												<img src="img/change/visa.svg" alt="visa">
												<img src="img/change/mastercard.svg" alt="mastercard">
												<picture>
													<source srcset="img/change/sepa.webp" type="image/webp"><img src="img/change/sepa.png" alt="sepa">
												</picture>
											</div>
										</div>
									</div>
								</div>

								<button class="body-exchange__button body-exchange__button--blue" type="submit">START
									EXCHANGE</button>

							</div>
						</form> -->
					</div>
				</div>
			</div>
		</section>
	</main>
</div>


<script src="js/convertExchange.js"></script>
<script src="js/convertBuy.js"></script>

@stop