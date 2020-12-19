@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="gameGrid">
		<canvas class="gameBoard" id="board"></canvas>
		<div class="stats">
			<div>
				<h2>Tetris</h2>
				<p>Score : <span id="score">0</span></p>
				<p>Lignes : <span id="nbLines">0</span></p>
				<p>Level : <span id="level">0</span></p>
				<canvas class="next" id="next"></canvas>
			</div>
			<button class="playButton" id="playButton">JOUER</button>
		</div>
	</div>
</div>
<script src="js/constant.js"></script>
<script src="js/piece.js"></script>
<script src="js/board.js"></script>
<script src="js/game.js"></script>
@endsection