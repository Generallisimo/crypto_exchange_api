<div id="popup" aria-hidden="true" class="popup">
		<div class="popup__wrapper">
			<section class="popup__content">
				<button data-close type="button" class="popup__close"></button>
				<h2 class="popup__title">
				{{__('message.PopOne')}}
				</h2>
				<form class="popup__search" action="#" method="POST">
					<input type="text" name="search-id" class="popup__search-input" placeholder="{{__('message.PopFour')}}">
					<button type="submit" class="popup__search-button"><img src="img/change/search.svg" alt="search"></button>
				</form>
				<article class="popup__description">
					<h3 class="popup__caption">
					{{__('message.PopTwo')}}
					</h3>
					<div class="popup__text">
					{{__('message.PopThree')}}	
					</div>
				</article>
			</section>
		</div>
	</div>