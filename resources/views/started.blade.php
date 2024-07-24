@extends('layouts.app')

@section('title', 'Started')

@section('content')

<div class="wrapper started">
	<main class="page ">
		<section class="page__exchange exchange">
			<div class="exchange__container">
				<h1 class="exchange__title  title title--center">
					<span>Best crypto</span> exchange for you
				</h1>
				<div data-tabs class="exchange__wrapper">
					<div data-tabs-titles class="exchange__header header-exchange">
						<button class="header-exchange__button "><span>Crypto Exchange</span></button>
						<button class="header-exchange__button _tab-active"><span>Buy Crypto</span></button>
					</div>
					<div class="exchange__steps steps-exchange">
						<ul class="steps-exchange__list	">
							<li class="steps-exchange__item active">
								<div class="steps-exchange__text ">Send to</div>
							</li>
							<li class="steps-exchange__item">
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
					<div data-tabs-body class="exchange__tabs">
						<!-- Crypto Exchange -->
						<form action="#" method="POST" data-page-address="confirmation.html" class="exchange__main  exchange__main--change">
							<div class="exchange__body body-exchange">
								<div class="body-exchange__row ">
									<label class="body-exchange__label" for="send-coins-value"> You send</label>
									<input autocomplete="off" type="number" id="send-coins-value" name="send-coins-value" placeholder="0.1" required class="body-exchange__input ">
									<div class=" body-exchange__select select">
										<div class="select__button">
											<div class="select__icon">
												<img src="img/change/BTC.svg" alt="BTC">
											</div>
											<input class="select__value" value="BTC" placeholder="BTC" type="text" name="send-coins-option">
										</div>
										<div class="select__wrapper">
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
															Ethereum
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/ETH.svg" alt="ETH">
															</div>
															<div class="option__label">
																ETH
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															TRON
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/TRX.svg" alt="TRX">
															</div>
															<div class="option__label">
																TRX
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Litecoin
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/LTC.svg" alt="LTC">
															</div>
															<div class="option__label">
																LTC
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
									<label class="body-exchange__label" for="get-coins-value">You get</label>
									<input autocomplete="off" type="number" id="get-coins-value" name="get-coins-value" placeholder="≈1.81059138" class="body-exchange__input">
									<div class=" body-exchange__select select">
										<div class="select__button">
											<div class="select__icon">
												<img src="img/change/ETH.svg" alt="ETH">
											</div>
											<input class="select__value" value="ETH" placeholder="ETH" type="text" name="get-coins-option">
										</div>
										<div class="select__wrapper">
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
															Ethereum
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/ETH.svg" alt="ETH">
															</div>
															<div class="option__label">
																ETH
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															TRON
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/TRX.svg" alt="TRX">
															</div>
															<div class="option__label">
																TRX
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Litecoin
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/LTC.svg" alt="LTC">
															</div>
															<div class="option__label">
																LTC
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
								<div class="body-exchange__row body-exchange__row--alert">
									<div class="body-exchange__column form-row ">
										<input autocomplete="off" type="number" id="payout-exchange" name="payout-exchange" placeholder="Enter the recipient’s ETH address" class=" form-row__input" data-validate required data-required data-error="Address is invalid">
										<label class=" form-row__label" for="payout-exchange">Enter the recipient’s ETH
											address</label>
										<div class="body-exchange__alert">Do not provide a smart contract as your ETH payout address</div>
									</div>
									<button class="body-exchange__button" type="submit">NEXT</button>
								</div>
								<div data-spollers class="body-exchange__spollers spollers-exchange">
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
								</div>
							</div>
						</form>
						<!-- Buy Crypto -->
						<form action="#" method="POST" data-page-address="confirmation.html" class="exchange__main  exchange__main--buy">

							<div class="exchange__body body-exchange">
								<div class="body-exchange__row ">
									<label class="body-exchange__label" for="send-money-value"> You send</label>
									<input autocomplete="off" type="number" id="send-money-value" name="send-money-value" placeholder="100" required data-required class="body-exchange__input ">
									<div class=" body-exchange__select select">
										<div class="select__button">
											<div class="select__icon">
												<img src="img/change/USD.svg" alt="USD">
											</div>

											<input class="select__value" value="USD" placeholder="USD" type="text" name="send-money-option">
										</div>
										<div class="select__wrapper">
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
															US Dollar
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/USD.svg" alt="USD">
															</div>
															<div class="option__label">
																USD
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Euro
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/EUR.svg" alt="EUR">
															</div>
															<div class="option__label">
																EUR
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Pound Sterling
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/GPB.svg" alt="GPB">
															</div>
															<div class="option__label">
																GPB
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Mexican Peso
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/MXN.svg" alt="MXN">
															</div>
															<div class="option__label">
																MXN
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
									<input autocomplete="off" type="number" id="get-buy-value" name="get-buy-value" placeholder="≈0.00129786" class="body-exchange__input">
									<div class=" body-exchange__select select">
										<div class="select__button">
											<div class="select__icon">
												<img src="img/change/BTC.svg" alt="BTC">
											</div>
											<input class="select__value" value="BTC" placeholder="BTC" type="text" name="get-buy-option">
										</div>
										<div class="select__wrapper">
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
															Ethereum
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/ETH.svg" alt="ETH">
															</div>
															<div class="option__label">
																ETH
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															TRON
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/TRX.svg" alt="TRX">
															</div>
															<div class="option__label">
																TRX
															</div>
														</div>
													</li>
													<li class="option__item">
														<div class="option__caption">
															Litecoin
														</div>
														<div class="option__position">
															<div class="option__icon">
																<img src="img/change/LTC.svg" alt="LTC">
															</div>
															<div class="option__label">
																LTC
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
										<input autocomplete="off" type="number" id="payout-buy" name="payout-buy" placeholder="Enter the recipient’s ETH address" class=" form-row__input" data-validate required data-required data-error="Address is invalid">
										<label class=" form-row__label" for="payout-buy">Enter the recipient’s ETH
											address</label>
										<div class="body-exchange__alert">Do not provide a smart contract as your ETH payout address</div>
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
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="page__advantages advantages ">
			<div class="advantages__container ">
				<div class="advantages__wrapper">
					<ul class="advantages__list">
						<li class="advantages__item ">
							<div class="advantages__icon">
								<img src="img/started/advantages/limitless.svg" alt="infinity symbol ">
							</div>
							<h2 class="advantages__description">
								Limitless, custody-free cryptocurrency exchange
							</h2>
						</li>
						<li class="advantages__item ">
							<div class="advantages__icon">
								<img src="img/started/advantages/registration.svg" alt="registration symbol">
							</div>
							<h2 class="advantages__description">
								No registration or account needed
							</h2>
						</li>
						<li class="advantages__item ">
							<div class="advantages__icon">
								<img src="img/started/advantages/private.svg" alt="private symbol">
							</div>
							<h2 class="advantages__description">
								Your privacy is our top concern
							</h2>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="page__how how ">
			<div data-tabs class="how__container ">
				<div class="how__header ">
					<h2 class="how__title title">
						How to use T1EX
					</h2>
					<nav data-tabs-titles class="how__navigation">
						<button type="button" class="how__button _tab-active">Exchange</button>
						<button type="button" class="how__button ">Buy</button>
					</nav>
				</div>
				<div data-tabs-body class="how__body">
					<!-- 	Вміст першого таба -->
					<div class="how__wrapper ">
						<ul class=" how__list">
							<li class="how__item ">
								<div class="how__row">
									<div class="how__icon">
										<img src="img/started/how/crypto.svg" alt="crypto">
									</div>
								</div>
								<div class="how__content">
									<h3 class="how__caption">
										Pick a Crypto
									</h3>
									<div class="how__description">
										Choose the exchange pair
									</div>
								</div>
							</li>
							<li class="how__item ">
								<div class="how__row">
									<div class="how__icon">
										<img src="img/started/how/wallet.svg" alt="wallet">
									</div>
								</div>
								<div class="how__content">

									<h3 class="how__caption">
										Enter Wallet Address
									</h3>
									<div class="how__description">
										Provide the wallet address for us to send exchanged funds
									</div>
								</div>
							</li>
							<li class="how__item ">
								<div class="how__row">
									<div class="how__icon">
										<img src="img/started/how/sent.svg" alt="sent">
									</div>
								</div>
								<div class="how__content">

									<h3 class="how__caption">
										Send the Deposit
									</h3>
									<div class="how__description">
										Send in the amount of crypto needed for exchange
									</div>
								</div>
							</li>
							<li class="how__item ">
								<div class="how__row">
									<div class="how__icon">
										<img src="img/started/how/check.svg" alt="check">
									</div>
								</div>
								<div class="how__content">

									<h3 class="how__caption">
										Receive Funds
									</h3>
									<div class="how__description">
										Get exchanged cryptocurrency
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- Вміст другого таба -->
					<div class="how__wrapper ">
						<ul class=" how__list">

							<li class="how__item ">
								<div class="how__row">
									<div class="how__icon">
										<img src="img/started/how/dollar.svg" alt="dollar">
									</div>
								</div>
								<div class="how__content">

									<h3 class="how__caption">
										Pick Currencies
									</h3>
									<div class="how__description">
										Choose the fiat currency you will use and the crypto to receive
									</div>
								</div>
							</li>
							<li class="how__item ">
								<div class="how__row">
									<div class="how__icon">
										<img src="img/started/how/wallet.svg" alt="wallet">
									</div>
								</div>
								<div class="how__content">

									<h3 class="how__caption">
										Enter Wallet Address
									</h3>
									<div class="how__description">
										Provide the wallet address for us to send exchanged funds
									</div>
								</div>
							</li>
							<li class="how__item ">
								<div class="how__row">
									<div class="how__icon">
										<img src="img/started/how/verified.svg" alt="verified">
									</div>
								</div>
								<div class="how__content">
									<h3 class="how__caption">
										Get Verified
									</h3>
									<div class="how__description">
										Pass the necessary check if it’s the first time you’re buying crypto
									</div>
								</div>
							</li>
							<li class="how__item ">
								<div class="how__row">
									<div class="how__icon">
										<img src="img/started/how/buy.svg" alt="buy">
									</div>
								</div>
								<div class="how__content">
									<h3 class="how__caption">
										Buy Cryptocurrency
									</h3>
									<div class="how__description">
										Transfer fiat money to the service provider and receive crypto
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="page__media media ">
			<div class="media__container ">
				<div class="media__header">
					<h2 class="media__title title ">
						Reviews
					</h2>
					<div class="media__rate rate-media">
						<h3 class="rate-media__caption">
							Excellent
						</h3>
						<div class="rate-media__row">
							<img src="img/started/media/star.svg" alt="star">
							<img src="img/started/media/star.svg" alt="star">
							<img src="img/started/media/star.svg" alt="star">
							<img src="img/started/media/star.svg" alt="star">
							<img src="img/started/media/star.svg" alt="star">
						</div>
						<div class="rate-media__label">
							Trustpilot
						</div>
					</div>
				</div>
				<div class="media__slider swiper-media">
					<div class="swiper-media__wrapper swiper-wrapper">
						<div class="swiper-media__slide swiper-slide">
							<div class="swiper-media__content">
								<div class="swiper-media__nickname">
									freedom2380
								</div>
								<div class="swiper-media__date">Elite service</div>
								<div class="swiper-media__text">
									<p>
										Elite service. swift exchange and no issues whatsoever. i have used this service for over 6 months
										now. keep up the
										great work guys A+++++++++++++++++++++++
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-media__slide swiper-slide">
							<div class="swiper-media__content">
								<div class="swiper-media__nickname">
									John Browning
								</div>
								<div class="swiper-media__date">EVM > non-EVM chains</div>
								<div class="swiper-media__text">
									<p>
										If you’re having problems finding ways to bridge assets from niche sectors of web3 to other niche
										areas and can’t find a
										one step, plug and play option, StealthEX is your new best friend. This is my preferred way to get
										EVM tokens to non-EVM
										chains by avoiding CEX’s or any other custodial option. With StealthEX you are in control, you
										minimize middle-men, and
										ultimately reduce capital inefficiencies.
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-media__slide swiper-slide">
							<div class="swiper-media__content">
								<div class="swiper-media__nickname">
									CryptoJ
								</div>
								<div class="swiper-media__date">Quick exchange</div>
								<div class="swiper-media__text">
									<p>
										Quick exchange, lots of coins to swap. Also the support is great! Quick resolving (if there are
										any) problems. So far a
										great service. Used it more then 50 times
									</p>
								</div>
							</div>
						</div>
						<!-- !!! copy -->
						<div class="swiper-media__slide swiper-slide">
							<div class="swiper-media__content">
								<div class="swiper-media__nickname">
									freedom2380
								</div>
								<div class="swiper-media__date">Elite service</div>
								<div class="swiper-media__text">
									<p>
										Elite service. swift exchange and no issues whatsoever. i have used this service for over 6 months
										now. keep up the
										great work guys A+++++++++++++++++++++++
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-media__slide swiper-slide">
							<div class="swiper-media__content">
								<div class="swiper-media__nickname">
									freedom2380
								</div>
								<div class="swiper-media__date">Elite service</div>
								<div class="swiper-media__text">
									<p>
										Elite service. swift exchange and no issues whatsoever. i have used this service for over 6 months
										now. keep up the
										great work guys A+++++++++++++++++++++++
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-media__slide swiper-slide">
							<div class="swiper-media__content">
								<div class="swiper-media__nickname">
									John Browning
								</div>
								<div class="swiper-media__date">EVM > non-EVM chains</div>
								<div class="swiper-media__text">
									<p>
										If you’re having problems finding ways to bridge assets from niche sectors of web3 to other niche

									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="media__navigation">
					<button type="button" class="media__button media__button--prev" aria-label="button prev">
						<svg viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14 26L2 14L14 2" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<a href="#" class="media__link">Explore more</a>
					<button type="button" class="media__button media__button--next" aria-label="button next">
						<svg viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2 2L14 14L2 26" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
				</div>
			</div>
		</section>
		<section class="page__reviews-rate reviews-rate ">
			<div class="reviews-rate__container decoration">
				<h2 class="reviews-rate__title title  title--center">
					Reviews
				</h2>
				<div class="reviews-rate__wrapper">
					<h3 class="reviews-rate__caption">
						Excellent
					</h3>
					<div class="reviews-rate__row">
						<img src="img/about/reviews-rate/star.svg" alt="star">
						<img src="img/about/reviews-rate/star.svg" alt="star">
						<img src="img/about/reviews-rate/star.svg" alt="star">
						<img src="img/about/reviews-rate/star.svg" alt="star">
						<img src="img/about/reviews-rate/star.svg" alt="star">
					</div>
					<div class="reviews-rate__description">
						Based on 200+ reviews
					</div>
					<div class="reviews-rate__label">
						Trustpilot
					</div>
				</div>
			</div>
		</section>
		<section class="page__blog blog ">
			<div class="blog__container ">
				<h2 class="blog__title title title--center">
					Our Blog
				</h2>
				<div class="blog__slider swiper-blog">
					<div class="swiper-blog__wrapper swiper-wrapper">
						<div class="swiper-blog__slide swiper-slide">
							<a href="#" class="swiper-blog__image">
								<picture>
									<source srcset="img/started/blog/blog1.webp" type="image/webp"><img src="img/started/blog/blog1.jpg" alt="image">
								</picture>
							</a>
							<div class="swiper-blog__content">
								<div class="swiper-blog__row">
									<a href="#" class="swiper-blog__date">March 13, 2024</a>
									<a href="#" class="swiper-blog__tag">Price Prediction</a>
								</div>
								<h3 class="swiper-blog__title">
									<a href="#"> Fetch.ai Price Prediction: Can FET Crypto Reach $10?</a>
								</h3>

								<div class="swiper-blog__text">
									<p>
										Uncover Fetch.ai Price Prediction, empowering you to anticipate market trends and make decisions
										about its future.
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-blog__slide swiper-slide">
							<a href="#" class="swiper-blog__image">
								<picture>
									<source srcset="img/started/blog/blog2.webp" type="image/webp"><img src="img/started/blog/blog2.jpg" alt="image">
								</picture>
							</a>
							<div class="swiper-blog__content">
								<div class="swiper-blog__row">
									<a href="#" class="swiper-blog__date">March 13, 2024</a>
									<a href="#" class="swiper-blog__tag">Price Prediction</a>
								</div>
								<h3 class="swiper-blog__title">
									<a href="#">Fetch.ai Price Prediction: Can FET Crypto Reach $10?</a>
								</h3>

								<div class="swiper-blog__text">
									<p>
										Uncover Fetch.ai Price Prediction, empowering you to anticipate market trends and make decisions
										about its future.
									</p>
								</div>
							</div>
						</div>
						<div class="swiper-blog__slide swiper-slide">
							<a href="#" class="swiper-blog__image">
								<picture>
									<source srcset="img/started/blog/blog3.webp" type="image/webp"><img src="img/started/blog/blog3.jpg" alt="image">
								</picture>
							</a>
							<div class="swiper-blog__content">
								<div class="swiper-blog__row">
									<a href="#" class="swiper-blog__date">March 13, 2024</a>
									<a href="#" class="swiper-blog__tag">Price Prediction</a>
								</div>
								<h3 class="swiper-blog__title">
									<a href="#"> Fetch.ai Price Prediction: Can FET Crypto Reach $10?</a>
								</h3>

								<div class="swiper-blog__text">
									<p>
										Uncover Fetch.ai Price Prediction, empowering you to anticipate market trends and make decisions
										about its future.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="blog__navigation">
					<button aria-label="button prev" type="button" class="blog__button blog__button--prev">
						<svg viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14 26L2 14L14 2" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<a href="#" class="blog__link">Explore more</a>
					<button aria-label="button next" type="button" class="blog__button blog__button--next">
						<svg viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2 2L14 14L2 26" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
				</div>
			</div>
		</section>
	</main>
</div>


@stop