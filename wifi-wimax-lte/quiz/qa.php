<?php
/*
Description : Contain list of question, possible answer and correct answer
Author : Keith Amoah
Date : 03/11/2016
*/


$questions =
[
	[
		'How much did mobile companies pay for 3G license in the UK?',//Question
		[
			"10 Billion",
			"22 Billion",
			"200 Billion"
		],//Possible Answer
		'22 Billion' //, Correct Answer
		//Government raised the £22 billion from selling 3G spectrum.
	],

	[

		"Which is true?",
		[
		"AMPS is a second generation system",
		"MIMO can used to increase the transmission/reception data rate",
		"WiMAX is not IEEE standard"
		],
		"MIMO can used to increase the transmission/reception data rate"//,
		//MIMO can be used to increase the data rate by transmitting and receiving through muliple antennae.

	],

	[
			'What is the highest data rate achieved using 802.11n?',
			[
					'600 mbps',
					'300 mbps',
					'100 mbps'
			],
			'600 mbps'//,
			//802.11n can achieve a data rate of 600 mbps using 4 spatial streams,a coding rate of  5/6,a 64Quadriture Amplitude Modulation (64QAM) and a 40MHz channel.
	],
	[
		'Which modulation technique is the least suceptible to noise?',
		[
				'16 QAM',
				'QPSK',
				'BSPK',
		],
		'BSPK'//,
		//The more granular the angle shift, the more data that can be sent per symbol.However, the channel decoder finds it more difficult to discriminate especially when there is noise on the channel.Quadriture Phase Key shift(QPSK) and Quadriture Amplitude Modulation(QAM) send more data per symbol than the Binary Phase Shift Key(BSPK) by using a more granular angle shift.Therefore BSPK is the least susceptible to noise.
	],
	[
		'Which travels further WiMAX or Wi-Fi?',
		[
			'Wi-Fi',
			'WiMAX'
		],
		'WiMAX'//.
		//WiMAX travels further than Wi-Fi.
	],
	[
		'Which class of WiMAX QoS has the highest priority?',
		[
		'Best Effort Services',
		'Real-time Polling Services',
		'Unsolicited Grant Services'
		],
		'Unsolicited Grant Services'//,
		//Unsolicited Grant Services(UGS) has the highest priority.
	],
	[
			'Which FEC coding provides the highest data rate?',
			[
					'1/2',
					'3/4',
					'5/6'
			],
			'5/6'//,
			//5/6 is the highest coding rate. This means 5 bits are used for transmitting data. 1 bit is used for error correction.
	],
	[
		'Which inter-frame spacing has the shortest time slot?',
		[
				'SIFS',
				'DIFS',
				'PIFS'
		],
		'SIFS'//,
		//Short inter-frame space(SIFS) has the shortest time slot.

	],
	[
		'What modulation techinque is used for Uplink?',
		[
				'OFDM',
				'TDMA',
				'SC-FDMA'
		],
		'SC-FDMA'//,
		//Single Carrier Frequency Multiple Access(SC-FDMA) is used for Uplink in LTE. The reason why SC-FDMA is used instead of OFDMA is because OFDMA has a lower Peak Power to Average ratio of the signal than SC-FDMA.
	],
	[
			'What is the role of the S-GW in LTE?',
			[
				'Responsible for IP address allocation for end user',
				'Responsible for enforcing QoS',
				'serves as the anchor for bearers as users move from eNode to eNodeB'
			],
			'serves as the anchor for bearers as users move from eNode to eNodeB'//,
			//Serving Gateway (S-GW). All user packets are transferred via the serving gateway. It serves as the anchor for bearers as users move from eNodeB to eNodeB ( i.e. Base Station to Base Station).
	]
];

$totalQuestion = count($questions);
?>