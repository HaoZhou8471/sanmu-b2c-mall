(function(a) {
	a.fn.bubbleup = function(b) {
		b = a.extend({
			tooltip: false,
			scale: 120,
			fontFamily: "Helvetica, Arial, sans-serif",
			color: "#333333",
			fontSize: 12,
			fontWeight: "bold",
			inSpeed: "fast",
			outSpeed: "fast"
		}, b);
		return this.each(function() {
			a.fn.bubbleup.runing(a(this), b)
		})
	};
	a.fn.bubbleup.runing = function(d, b) {

	}
})(jQuery);