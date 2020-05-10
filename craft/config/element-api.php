<?php
	namespace Craft;
	
	use craft\elements\Entry;
	use craft\elements\GlobalSet;
	return [
	    'endpoints' => [

			'api/globals.json' =>
				[
			  'elementType' => GlobalSet::Class,
			  'criteria' => ['handle' => 'kulpahjul'],
			  'transformer' => function(GlobalSet $globalSet) {
				
				  return[
					  'featuredImage' =>  $globalSet->featuredImage->one()->getUrl(),
					  'email' =>  $globalSet->email,
					  'phone' =>  $globalSet->phone,
					  'facebook' =>  $globalSet->facebook,
					  'instagram' =>  $globalSet->instagram,
					  'snapchat' =>  $globalSet->snapchat,
					  'youtubeMain' =>  $globalSet->youtubeMain,
					  'youtubeBonus' =>  $globalSet->youtubeBonus
				  ];
			  },
			],
					  
				
			  

	// NEWS ENDPOINT
	        'api/news.json' => function() {
				// \Craft::$app->response->headers->set('Access-Control-Allow-Origin', 'http://example.com');
	            // HeaderHelper::setHeader([
	            //     'Access-Control-Allow-Origin' => '*'
	            // ]);
				
	            return [
	                'elementType' => Entry::class,
	                'elementsPerPage' => 300,
	                'criteria' => [
	                    'section' => 'news',
	                    'postDate' => '>=' . date('Y-m-d', strtotime("-90 days"))
	                ],
	                'transformer' => function(Entry $entry) {
	                    // foreach ($entry->newsCategory as $category) {
	                    //     $categoryTitle = $category->title;
	                    // }
	                    return [
							'title' => $entry->title,
							'slug' => $entry->slug,
	                        'id' => (int) $entry->id,
	                        'subheading' => $entry->subheading,
	                         'postDate' => $entry->postDate
	                    ];
	                },
	            ];
			},
	// END NEWS ENDPOINT


	// HOME ENDPOINT
			'api/home.json' => function() {
				// \Craft::$app->response->headers->set('Access-Control-Allow-Origin', 'http://example.com');
	            // HeaderHelper::setHeader([
	            //     'Access-Control-Allow-Origin' => '*'
	            // ]);
				
	            return [
	                'elementType' => Entry::class,
	                'elementsPerPage' => 300,
	                'criteria' => [
	                    'section' => 'home',
	                    
	                ],
	                'transformer' => function(Entry $entry) {
	                    // foreach ($entry->newsCategory as $category) {
	                    //     $categoryTitle = $category->title;
						// }
						$bodyBlocks = [];
						foreach($entry->getFieldValue('article')->all() as $block){
        switch ($block->type->handle) {
            case 'articleBody':
                $bodyBlocks[] = [
                    'text' => $block->text->getParsedContent(),
				];
			break;
				case 'articleheading':
					$bodyBlocks[] = [
						'articleHeading' => $block->articleheading,
					];
					break;
                

                
        }
    }
	                    return [
							'title' => $entry->title,
							'slug' => $entry->slug,
	                        'id' => (int) $entry->id,
							'subheading' => $entry->subheading,
							'storeHeader' => $entry->storeHeader,
							'storeSubheader' => $entry->storeSubheader,
							'body' => $bodyBlocks,
							'featuredImage' =>  $entry->featuredImage->one()->getUrl()

							
	                    ];
	                },
	            ];
			},
		// END HOME ENDPOINT

		// CONTACT ENDPOINT
			'api/contact.json' => function() {
				// \Craft::$app->response->headers->set('Access-Control-Allow-Origin', 'http://example.com');
	            // HeaderHelper::setHeader([
	            //     'Access-Control-Allow-Origin' => '*'
	            // ]);
				
	            return [
	                'elementType' => Entry::class,
	                'elementsPerPage' => 300,
	                'criteria' => [
	                    'section' => 'contact',
	                    
	                ],
	                'transformer' => function(Entry $entry) {
	                    // foreach ($entry->newsCategory as $category) {
	                    //     $categoryTitle = $category->title;
						// }
						$bodyBlocks = [];
						foreach($entry->getFieldValue('article')->all() as $block){
        switch ($block->type->handle) {
            case 'articleBody':
                $bodyBlocks[] = [
                    'text' => $block->text->getParsedContent(),
				];
			break;
				case 'articleheading':
					$bodyBlocks[] = [
						'articleHeading' => $block->articleheading,
					];
					break;
                

                
        }
    }
	                    return [
							'title' => $entry->title,
							'slug' => $entry->slug,
	                        'id' => (int) $entry->id,
							'subheading' => $entry->subheading,
							'contactInfo' => $entry->contactInfo,
							'body' => $bodyBlocks,
							

							
	                    ];
	                },
	            ];
			}
		// END CONTACT ENDPOINT
	    ]
	];