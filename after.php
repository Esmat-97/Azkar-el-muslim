<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            overflow-y: auto; /* Enable vertical scrolling */
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin-bottom: 10px; /* Add margin between containers */
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .azkar-item {
            margin: 20px 0;
            padding: 15px;
            border-left: 5px solid #007bff;
            background-color: #f1f1f1;
            border-radius: 5px;
        }
        .azkar-text {
            font-size: 18px;
            color: #0056b3;
            margin: 0 0 5px;
        }
        .translation {
            font-size: 14px;
            color: #555;
            margin: 0;
        }
    </style>
</head>
<body>
<?php
    // Sample API response (since no actual endpoint is provided)
    $response = '{
		"id": 27,
		"category": "الأذكار بعد السلام من الصلاة",
		"audio": "/audio/ar_7esn_AlMoslem_by_Doors_026.mp3",
		"filename": "ar_7esn_AlMoslem_by_Doors_026",
		"array": [
			{
				"id": 1,
				"text": "((أَسْتَغْفِرُ اللَّهَ (ثَلاَثَاً) اللَّهُمَّ أَنْتَ السَّلاَمُ، وَمِنْكَ السَّلاَمُ، تَبَارَكْتَ يَا ذَا الْجَلاَلِ وَالْإِكْرَامِ)).",
				"count": 1,
				"audio": "/audio/66.mp3",
				"filename": "66"
			},
			{
				"id": 2,
				"text": "((لاَ إِلَهَ إِلاَّ اللَّهُ وَحْدَهُ لاَ شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ [ثلاثاً]، اللَّهُمَّ لاَ مَانِعَ لِمَا أَعْطَيْتَ، وَلاَ مُعْطِيَ لِمَا مَنَعْتَ، وَلاَ يَنْفَعُ ذَا الْجَدِّ مِنْكَ الجَدُّ)).",
				"count": 1,
				"audio": "/audio/67.mp3",
				"filename": "67"
			},
			{
				"id": 3,
				"text": "((لَا إِلَهَ إِلاَّ اللَّهُ وَحْدَهُ لاَ شَرِيكَ لَهُ، لَهُ الْمُلْكُ، وَلَهُ الْحَمدُ، وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ. لاَ حَوْلَ وَلاَ قُوَّةَ إِلاَّ بِاللَّهِ، لاَ إِلَهَ إِلاَّ اللَّهُ، وَلاَ نَعْبُدُ إِلاَّ إِيَّاهُ, لَهُ النِّعْمَةُ وَلَهُ الْفَضْلُ وَلَهُ الثَّنَاءُ الْحَسَنُ، لَا إِلَهَ إِلاَّ اللَّهُ مُخْلِصِينَ لَهُ الدِّينَ وَلَوْ كَرِهَ الكَافِرُونَ)).",
				"count": 1,
				"audio": "/audio/68.mp3",
				"filename": "68"
			},
			{
				"id": 4,
				"text": "((سُبْحَانَ اللَّهِ، وَالْحَمْدُ لِلَّهِ، وَاللَّهُ أَكْبَرُ (ثلاثاً وثلاثين) لاَ إِلَهَ إِلاَّ اللَّهُ وَحْدَهُ لاَ شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ)).",
				"count": 33,
				"audio": "/audio/69.mp3",
				"filename": "69"
			},
			{
				"id": 5,
				"text": "بسم الله الرحمن الرحيم ﴿قُلْ هُوَ اللَّهُ أَحَدٌ* اللَّهُ الصَّمَدُ* لَمْ يَلِدْ وَلَمْ يُولَدْ* وَلَمْ يَكُن لَّهُ كُفُواً أَحَدٌ﴾، بسم الله الرحمن الرحيم ﴿قُلْ أَعُوذُ بِرَبِّ الْفَلَقِ* مِن شَرِّ مَا خَلَقَ* وَمِن شَرِّ غَاسِقٍ إِذَا وَقَبَ* وَمِن شَرِّ النَّفَّاثَاتِ فِي الْعُقَدِ* وَمِن شَرِّ حَاسِدٍ إِذَا حَسَدَ﴾،بسم الله الرحمن الرحيم ﴿قُلْ أَعُوذُ بِرَبِّ النَّاسِ* مَلِكِ النَّاسِ* إِلَهِ النَّاسِ* مِن شَرِّ الْوَسْوَاسِ الْخَنَّاسِ* الَّذِي يُوَسْوِسُ فِي صُدُورِ النَّاسِ* مِنَ الْجِنَّةِ وَ النَّاسِ﴾ بَعْدَ كُلِّ صَلاَةٍ.",
				"count": 1,
				"audio": "/audio/70.mp3",
				"filename": "70"
			},
			{
				"id": 6,
				"text": "﴿اللَّهُ لاَ إِلَهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ نَوْمٌ لَّهُ مَا فِي السَّمَوَاتِ وَمَا فِي الأَرْضِ مَن ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلاَ يُحِيطُونَ بِشَيْءٍ مِّنْ عِلْمِهِ إِلاَّ بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ السَّمَوَاتِ وَالأَرْضَ وَلاَ يَؤُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ﴾ عَقِبَ كلِّ صَلاَةٍ.",
				"count": 1,
				"audio": "/audio/71.mp3",
				"filename": "71"
			},
			{
				"id": 7,
				"text": "((لاَ إِلَهَ إِلاَّ اللَّهُ وَحْدَهُ لاَ شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ يُحْيِي وَيُمِيتُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ)) عَشْرَ مَرّاتٍ بَعْدَ صَلاةِ الْمَغْرِبِ وَالصُّبْحِ.",
				"count": 10,
				"audio": "/audio/72.mp3",
				"filename": "72"
			},
			{
				"id": 8,
				"text": "((اللَّهُمَّ إِنِّي أَسْأَلُكَ عِلْماً نافِعاً، وَرِزْقاً طَيِّباً، وَعَمَلاً مُتَقَبَّلاً)) بَعْدَ السّلامِ مِنْ صَلاَةِ الفَجْرِ.",
				"count": 1,
				"audio": "/audio/73.mp3",
				"filename": "73"
			}
		]
	}';

    if ($response === false) {
        echo "Error fetching data from API";
    } else {
        $data = json_decode($response, true);
        if ($data === null) {
            echo "Error decoding JSON response: " . json_last_error_msg();
        } else {
            foreach ($data['array'] as $item) {
                echo '
                    <div class="container">
                        <div class="azkar-item">
                            <p class="azkar-text">' . htmlspecialchars($item['text']) . '</p>
                            <div class="azkar-text">تكرار: ' . htmlspecialchars($item['count']) . '</div>
                        </div>
                    </div>
                ';
            }
        }
    }
?>
</body>
</html>