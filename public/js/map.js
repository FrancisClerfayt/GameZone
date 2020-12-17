document.addEventListener('DOMContentLoaded', function() {

	document.getElementById('servicesFilter').addEventListener( 'click', () => {
		document.querySelectorAll('#services').forEach( elem => {
			if ( elem.getElementsByClassName.display === 'none' ) {
				elem.style.display = 'block';
			} else {
				elem.style.display = 'none';
			}
		});
	});

	document.getElementById('restaurantsFilter').addEventListener( 'click', () => {
		document.querySelectorAll('#restaurants').forEach( elem => {
			if ( elem.getElementsByClassName.display === 'none' ) {
				elem.style.display = 'block';
			} else {
				elem.style.display = 'none';
			}
		});
	});

	document.getElementById('shopsFilter').addEventListener( 'click', () => {
		document.querySelectorAll('#shops').forEach( elem => {
			if ( elem.getElementsByClassName.display === 'none' ) {
				elem.style.display = 'block';
			} else {
				elem.style.display = 'none';
			}
		});
	});

	document.getElementById('photoSpotFilter').addEventListener( 'click', () => {
		document.querySelectorAll('#shops').forEach( elem => {
			if ( elem.getElementsByClassName.display === 'none' ) {
				elem.style.display = 'block';
			} else {
				elem.style.display = 'none';
			}
		});
	});

	let more1m30 = [
		'awesomeHeroes',
		'contagionVR',
		'fighterHardTeam'
	];

	let more1m10 = [
		'championsLeagueSurvivor',
		'superFighterLeague'
	];

	let noRestriction = [
		'battleKart',
		'championsLeague',
		'gameCenter',
		'heroesTeam'
	];

	let restrictionFilter = document.getElementById('restrictionFilter');

	restrictionFilter.addEventListener('select', () => {
		if (restrictionFilter.value === 'all') {
			noRestriction.forEach( elem => {
				let element = document.querySelector( '.' + elem );
				element.style.display = 'block';
			});
		} else if (restrictionFilter.value === '1m10') {
			noRestriction.concat(more1m10).forEach( elem => {
				let element = document.querySelector( '.' + elem );
				element.style.display = 'block';
			});
		} else {
			noRestriction.concat([ more1m10, more1m30 ]).forEach( elem => {
				let element = document.querySelector( '.' + elem );
				element.style.display = 'block';
			});
		}
	});
});