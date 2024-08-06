@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="wrapper about">
	<main class="page">
		<div class="page__breadcrumbs breadcrumbs">
			<div class="breadcrumbs__container">
				<a class="breadcrumbs__link" href="{{ route('started') }}"><span>Main</span></a>
				<span class="breadcrumbs__item">About</span>
			</div>
		</div>
		<section class="page__hero hero ">
			<div class="hero__container decoration">
				<h1 class="hero__title title">
				{{__('message.About')}}
				</h1>
				<ul class="hero__list">
					<li class="hero__item">
						<article class="hero__article article-hero">
							<div class="article-hero__content">
								<h2 class="article-hero__title">
								{{__('message.Friendly')}}
								</h2>
								<div class="article-hero__text">
									<p>{{__('message.FriendlyText')}}</p>
								</div>
							</div>
							<div class="article-hero__image">
								<picture>
									<source srcset="img/about/hero/friendly.webp" type="image/webp"><img src="img/about/hero/friendly.png" alt="friendly">
								</picture>
							</div>
						</article>
					</li>

					<li class="hero__item">
						<article class="hero__article article-hero">
							<div class="article-hero__content">
								<h2 class="article-hero__title">
									{{__('message.Private')}}
								</h2>
								<div class="article-hero__text">
									<p>{{__('message.PrivateText')}}</p>
								</div>
							</div>
							<div class="article-hero__image">
								<picture>
									<source srcset="img/about/hero/shield.webp" type="image/webp"><img src="img/about/hero/shield.png" alt="shield">
								</picture>
							</div>
						</article>
					</li>
					<li class="hero__item">
						<article class="hero__article article-hero">
							<div class="article-hero__content">
								<h2 class="article-hero__title">
									{{__('message.Limitless')}}
								</h2>
								<div class="article-hero__text">
									<p>{{__('message.LimitlessText')}}</p>
								</div>
							</div>
							<div class="article-hero__image">
								<picture>
									<source srcset="img/about/hero/chain.webp" type="image/webp"><img src="img/about/hero/chain.png" alt="chain">
								</picture>
							</div>
						</article>
					</li>

				</ul>
			</div>
		</section>
		<section class="page__benefits benefits ">
			<div class="benefits__container decoration">
				<h2 class="benefits__title title">
					{{__('message.Benefits')}}
				</h2>
				<div class="benefits__body">
					<ul class="benefits__list">
						<li class="benefits__item ">
							<div class="benefits__icon">
								<img src="img/about/benefits/limitless.svg" alt="limitless">
							</div>
							<h3 class="benefits__caption">
								{{__('message.Limitless')}}
							</h3>
						</li>
						<li class="benefits__item ">
							<div class="benefits__icon">
								<img src="img/about/benefits/registration.svg" alt="registration">
							</div>
							<h3 class="benefits__caption">
							{{__('message.BenefitsReg')}}
							</h3>
						</li>
						<li class="benefits__item ">
							<div class="benefits__icon">
								<img src="img/about/benefits/private.svg" alt="private">
							</div>
							<h3 class="benefits__caption">
								{{__('message.Private')}}
							</h3>
						</li>
						<li class="benefits__item ">
							<div class="benefits__icon">
								<img src="img/about/benefits/support.svg" alt="support">
							</div>
							<h3 class="benefits__caption">
							{{__('message.BenefitsSup')}}
							</h3>
						</li>
						<li class="benefits__item ">
							<div class="benefits__icon">
								<img src="img/about/benefits/assets.svg" alt="assets">
							</div>
							<h3 class="benefits__caption">
							{{__('message.BenefitsActive')}}
							</h3>
						</li>
						<li class="benefits__item ">
							<div class="benefits__icon">
								<img src="img/about/benefits/simple.svg" alt="simple">
							</div>
							<h3 class="benefits__caption">
								{{__('message.BenefitsSimp')}}
							</h3>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="page__exchanges exchanges ">
			<div class="exchanges__container ">
				<h2 class="exchanges__title title">
				{{__('message.Exchange')}}
				</h2>
				<div class="exchanges__body ">
					<ul class="exchanges__list">
						<li class="exchanges__item ">
							<a href="#" class="exchanges__icon">
								<picture>
									<source srcset="img/about/exchanges/binance.webp" type="image/webp"><img src="img/about/exchanges/binance.png" alt="binance">
								</picture>
							</a>
						</li>
						<li class="exchanges__item ">
							<a href="#" class="exchanges__icon">
								<picture>
									<source srcset="img/about/exchanges/huobi.webp" type="image/webp"><img src="img/about/exchanges/huobi.png" alt="huobi">
								</picture>
							</a>
						</li>
						<li class="exchanges__item ">
							<a href="#" class="exchanges__icon">
								<picture>
									<source srcset="img/about/exchanges/kukoin.webp" type="image/webp"><img src="img/about/exchanges/kukoin.png" alt="kukoin">
								</picture>
							</a>
						</li>
						<li class="exchanges__item ">
							<a href="#" class="exchanges__icon">
								<picture>
									<source srcset="img/about/exchanges/uniswap.webp" type="image/webp"><img src="img/about/exchanges/uniswap.png" alt="uniswap">
								</picture>
							</a>
						</li>
						<li class="exchanges__item ">
							<a href="#" class="exchanges__icon">
								<picture>
									<source srcset="img/about/exchanges/punkakeswap.webp" type="image/webp"><img src="img/about/exchanges/punkakeswap.png" alt="punkakeswap">
								</picture>
							</a>
						</li>
						<li class="exchanges__item ">
							<a href="#" class="exchanges__icon">
								<picture>
									<source srcset="img/about/exchanges/gate.webp" type="image/webp"><img src="img/about/exchanges/gate.png" alt="gate">
								</picture>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</section>
		<section class="page__partners partners ">
			<div class="partners__container ">
				<h2 class="partners__title title">
				{{__('message.Partner')}}
				</h2>
				<div class="partners__body">
					<ul class="partners__list">
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/ctyptodaily.webp" type="image/webp"><img src="img/about/partners/ctyptodaily.png" alt="ctyptodaily">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/swapzone.webp" type="image/webp"><img src="img/about/partners/swapzone.png" alt="swapzone">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/swapspace.webp" type="image/webp"><img src="img/about/partners/swapspace.png" alt="swapspace">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/cryptogeek.webp" type="image/webp"><img src="img/about/partners/cryptogeek.png" alt="cryptogeek">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/coinpedia.webp" type="image/webp"><img src="img/about/partners/coinpedia.png" alt="coinpedia">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/istaryvision.webp" type="image/webp"><img src="img/about/partners/istaryvision.png" alt="istaryvision">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/omega.webp" type="image/webp"><img src="img/about/partners/omega.png" alt="omega">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/trocador.webp" type="image/webp"><img src="img/about/partners/trocador.png" alt="trocador">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/coins.webp" type="image/webp"><img src="img/about/partners/coins.png" alt="coins">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/flashift.webp" type="image/webp"><img src="img/about/partners/flashift.png" alt="flashift">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/simplex.webp" type="image/webp"><img src="img/about/partners/simplex.png" alt="simplex">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/mercuryo.webp" type="image/webp"><img src="img/about/partners/mercuryo.png" alt="mercuryo">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/notoky.webp" type="image/webp"><img src="img/about/partners/notoky.png" alt="notoky">
								</picture>
							</a>
						</li>
						<li class="partners__item ">
							<a href="#" class="partners__icon">
								<picture>
									<source srcset="img/about/partners/obmify.webp" type="image/webp"><img src="img/about/partners/obmify.png" alt="obmify">
								</picture>
							</a>
						</li>


					</ul>
				</div>
			</div>
		</section>
		<section class="page__reviews-rate reviews-rate ">
			<div class="reviews-rate__container decoration">
				<h2 class="reviews-rate__title title  title--center">
					{{__('message.Reviews')}}
				</h2>
				<div class="reviews-rate__wrapper">
					<h3 class="reviews-rate__caption">
						{{__('message.Excellent')}}
					</h3>
					<div class="reviews-rate__row">
						<img src="img/about/reviews-rate/star.svg" alt="star">
						<img src="img/about/reviews-rate/star.svg" alt="star">
						<img src="img/about/reviews-rate/star.svg" alt="star">
						<img src="img/about/reviews-rate/star.svg" alt="star">
						<img src="img/about/reviews-rate/star.svg" alt="star">
					</div>
					<div class="reviews-rate__description">
						{{__('message.ExcellentBase')}}
					</div>
					<div class="reviews-rate__label">
						Trustpilot
					</div>
				</div>
			</div>
		</section>
		<section class="page__media media ">
			<div class="media__container ">
				<h2 class="media__title title  title--center">
				{{__('message.Media')}}
				</h2>
				<div class="media__slider swiper-media">
					<div class="swiper-media__wrapper swiper-wrapper">
						<div class="swiper-media__slide swiper-slide">
							<picture>
								<source srcset="img/about/media/benzigna.webp" type="image/webp"><img src="img/about/media/benzigna.png" alt="benzigna">
							</picture>
							<div class="swiper-media__content">

								<div class="swiper-media__date">Mar 12/2024</div>
								<div class="swiper-media__text">
									{{__('message.MediaOne')}}
								</div>
							</div>
						</div>
						<div class="swiper-media__slide swiper-slide">
							<picture>
								<source srcset="img/about/media/bitcoin.webp" type="image/webp"><img src="img/about/media/bitcoin.png" alt="bitcoin">
							</picture>
							<div class="swiper-media__content">

								<div class="swiper-media__date">Mar 12/2024</div>
								<div class="swiper-media__text">
									{{__('message.MediaTwo')}}

								</div>
							</div>
						</div>
						<div class="swiper-media__slide swiper-slide">
							<picture>
								<source srcset="img/about/media/affiliateprogram.webp" type="image/webp"><img src="img/about/media/affiliateprogram.png" alt="affiliate program">
							</picture>
							<div class="swiper-media__content">

								<div class="swiper-media__date">Mar 12/2024</div>
								<div class="swiper-media__text">
									{{__('message.MediaThree')}}
								</div>
							</div>
						</div>

						<!-- !!! copy -->

						<div class="swiper-media__slide swiper-slide">
							<picture>
								<source srcset="img/about/media/benzigna.webp" type="image/webp"><img class="swiper-media__image" src="img/about/media/benzigna.png" alt="benzigna">
							</picture>
							<div class="swiper-media__content">
								<div class="swiper-media__date">Mar 12/2024</div>
								<div class="swiper-media__text">
									{{__('message.MediaOne')}}
								</div>
							</div>
						</div>
						<div class="swiper-media__slide swiper-slide">
							<picture>
								<source srcset="img/about/media/bitcoin.webp" type="image/webp"><img class="swiper-media__image" src="img/about/media/bitcoin.png" alt="bitcoin">
							</picture>
							<div class="swiper-media__content">

								<div class="swiper-media__date">Mar 12/2024</div>
								<div class="swiper-media__text">
									{{__('message.MediaTwo')}}
								</div>
							</div>
						</div>
						<div class="swiper-media__slide swiper-slide">
							<picture>
								<source srcset="img/about/media/affiliateprogram.webp" type="image/webp"><img class="swiper-media__image" src="img/about/media/affiliateprogram.png" alt="affiliate program">
							</picture>
							<div class="swiper-media__content">

								<div class="swiper-media__date">Mar 12/2024</div>
								<div class="swiper-media__text">
									{{__('message.MediaThree')}}
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
	</main>
</div>

@stop