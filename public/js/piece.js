class Piece {
	x;
	y;
	color;
	shape;
	context;
	typeId;
	
	constructor(ctx){
		this.context = ctx;
		this.spawn();
	}
	
	spawn() {
		this.typeId = this.randomPiece(COLORS.length);
		this.shape = SHAPES[this.typeId];
		this.color = COLORS[this.typeId];
		this.x = 0;
		this.y = 0;
	}
	
	display() {
		this.context.fillStyle = this.color;
		this.shape.forEach(
			(row, y) => {
				row.forEach(
					(value, x) => {
						if (value > 0) {
							this.context.fillRect(this.x + x, this.y + y, 1, 1);
						}
					}
				);
			}
		);
	}
			
	move(piece){
		this.x = piece.x;
		this.y = piece.y;
		this.shape = piece.shape;
	}
	
	setStartingPosition() {
		if (this.typeId === 4) {
			this.x = 4;
		} else {
			this.x = 3;
		}
	}
	
	randomPiece(nbType) {
		let randomNumber;
		do {
			randomNumber = Math.floor( Math.random() * nbType );
		} while (randomNumber > 7 && randomNumber < 1);
		return randomNumber;
	}
}