<header data-lp class="header">
			<div class="header__container">
				<div class="header__logo"><img src="img/logo.svg" alt="logo"></div>
				<div class="header__menu menu">
					<nav class="menu__body">
						<ul class="menu__list">
							<!-- active  or menu__item--current -->
							<li class="menu__item"><a href="{{ route('about') }}" class="menu__link">About</a></li>
							<li class="menu__item currencies dropdown">
								<button type="button" class="menu__link">Currencies</button>
								<div class="currencies__wrapper">
									<ul class="currencies__list">
										<li class="currencies__item"><a href="#" class="currencies__link">
												<div class="currencies__icon"><img src="img/change/BTC.svg" alt="BTC"></div> Bitcoin (BTC)
											</a></li>
										<li class="currencies__item"><a href="#" class="currencies__link">
												<div class="currencies__icon"><img src="img/change/ETH.svg" alt="ETH"></div> Ethereum (ETH)
											</a></li>
										<li class="currencies__item"><a href="#" class="currencies__link">
												<div class="currencies__icon"><img src="img/change/LTC.svg" alt="LTC"></div> Litecoin (LTC)
											</a></li>
										<li class="currencies__item"><a href="#" class="currencies__link">
												<div class="currencies__icon"><img src="img/change/TRX.svg" alt="TRX"></div> Thron (TRX)
											</a></li>
										<li class="currencies__item"><a href="#" class="currencies__link">More coins</a></li>
									</ul>
								</div>
							</li>
							<li class="menu__item faq dropdown">
								<button type="button" class="menu__link">FAQ</button>
								<div class="faq__wrapper">
									<ul class="faq__list">
										<li class="faq__item">
											<a href="#" class="faq__link">
												How it works
											</a>
										</li>
										<li class="faq__item">
											<a href="#" class="faq__link">
												FAQ
											</a>
										</li>
										<li class="faq__item">
											<a href="#" class="faq__link">
												Contacts
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="menu__item"><a href="#" class="menu__link">Support</a></li>
							<li class="menu__item"><a href="#" class="menu__link">For partners</a></li>
							<li class="menu__item"><a href="#" class="menu__link">Blog</a></li>
						</ul>
						<div class="menu__actions">
							<button type="button" data-popup="#popup" class="menu__button">My
								exchanges</button>
							<div class="menu__lang lang dropdown">
								<div class="lang__icon">
									<img src="img/header/lang.svg" alt="lang">
								</div>
								<div class="lang__current">EN</div>
								<div class="lang__wrapper">
									<ul class="lang__list">
										<li class="lang__item">
											<a href="#" class="lang__link">UA</a>
										</li>
										<li class="lang__item">
											<a href="#" class="lang__link">GM</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</nav>
				</div>
				<button type="button" aria-label="burger menu" class="menu__icon icon-menu">
					<span></span>
				</button>
			</div>
		</header>