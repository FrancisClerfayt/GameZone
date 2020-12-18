document.addEventListener('DOMContentLoaded', function() {

	document.getElementById('servicesFilter').addEventListener( 'click', () => {
		document.querySelectorAll('#services').forEach( elem => {
			if (elem.style.display === 'none') {
				elem.style.display = 'block';
			} else {
				elem.style.display = 'none';
			}
		});
	});

	document.getElementById('restaurantsFilter').addEventListener( 'click', () => {
		document.querySelectorAll('#restaurants').forEach( elem => {
			if ( elem.style.display === 'none' ) {
				elem.style.display = 'block';
			} else {
				elem.style.display = 'none';
			}
		});
	});

	document.getElementById('shopsFilter').addEventListener( 'click', () => {
		document.querySelectorAll('#shops').forEach( elem => {
			if ( elem.style.display === 'none' ) {
				elem.style.display = 'block';
			} else {
				elem.style.display = 'none';
			}
		});
	});

	document.getElementById('photoSpotFilter').addEventListener( 'click', () => {
		document.querySelectorAll('#photoSpots').forEach( elem => {
			if ( elem.style.display === 'none' ) {
				elem.style.display = 'block';
			} else {
				elem.style.display = 'none';
			}
		});
	});

	let noRestriction = [
		'.battleKart',
		'.championsLeague',
		'.gameCenter',
		'.heroesTeam'
	];

	let more1m10 = [
		'.battleKart',
		'.championsLeague',
		'.gameCenter',
		'.heroesTeam',
		'.championsLeagueSurvivor',
		'.superFighterLeague'
	];
	
	let more1m30 = [
		'.fighterHardTeam',
		'.battleKart',
		'.gameCenter',
		'.heroesTeam',
		'.contagionVR',
		'.superFighterLeague',
		'.awesomeHeroes',
		'.championsLeague',
		'.championsLeagueSurvivor'
	];

	let restrictionFilter = document.getElementById('restrictionFilter');

	restrictionFilter.addEventListener('change', () => {
		// We hide all attractions
		more1m30.forEach((elem) => {
			document.querySelector(elem).style.display = 'none';
		});

		if (restrictionFilter.value === 'noRestriction') {
			// Attractions with no restriction selected
			console.log('noRestriction');
			noRestriction.forEach( (elem) => {
				document.querySelector(elem).style.display = 'block';
			});
		} else if (restrictionFilter.value === 'more1m10') {
			console.log('more1m10');
			// Attraction with a 1m10 limit selected
			more1m10.forEach( (elem) => {
				document.querySelector(elem).style.display = 'block';
			});
		} else {
			console.log('all');
			// All attractions is selected
			more1m30.forEach( (elem) => {
				document.querySelector(elem).style.display = 'block';
			});
		}
	});
});