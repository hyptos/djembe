var pie = new d3pie("pieChart", {
	"header": {
		"title": {
			"text": "Petit jeu qui fait du bruit",
			"fontSize": 24,
			"font": "open sans"
		},
		"subtitle": {
			"text": "Clique sur une couleur pour faire un son.",
			"color": "#999999",
			"fontSize": 13,
			"font": "open sans"
		},
		"titleSubtitlePadding": 9
	},
	"footer": {
		"color": "#999999",
		"fontSize": 10,
		"font": "open sans",
		"location": "bottom-left"
	},
	"size": {
		"canvasWidth": 590,
		"pieOuterRadius": "90%"
	},
	"data": {
		"content": [
			{
				"label": "DO",
				"value": 20,
				"color": "#e4a149"
			},
			{
				"label": "RE",
				"value": 20,
				"color": "#1ee679"
			},
			{
				"label": "MI",
				"value": 20,
				"color": "#8b6834"
			},
			{
				"label": "FA",
				"value": 20,
				"color": "#8fc467"
			},
			{
				"label": "SOL",
				"value": 20,
				"color": "#e65314"
			},
			{
				"label": "LA",
				"value": 20,
				"color": "#e98125"
			},
			{
				"label": "SI",
				"value": 20,
				"color": "#afec42"
			},
			{
				"label": "DO",
				"value": 20,
				"color": "#312749"
			}
		]
	},
	"labels": {
		"outer": {
			"pieDistance": 32
		},
		"inner": {
			"hideWhenLessThanPercentage": 3
		},
		"mainLabel": {
			"fontSize": 11
		},
		"percentage": {
			"color": "#ffffff",
			"decimalPlaces": 0
		},
		"value": {
			"color": "#adadad",
			"fontSize": 11
		},
		"lines": {
			"enabled": true
		},
		"truncation": {
			"enabled": true
		}
	},
	"effects": {
		"pullOutSegmentOnClick": {
			"effect": "linear",
			"speed": 400,
			"size": 8
		}
	},
	"misc": {
		"gradient": {
			"enabled": true,
			"percentage": 100
		}
	},
	"callbacks": {}
});
