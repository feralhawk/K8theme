<?php
namespace K8theme\Contexts;

use IO\Helper\ContextInterface;
use K8theme\Contexts\SingleItemContext;

use IO\Services\ItemSearch\Services\ItemSearchService;
use IO\Services\ItemSearch\SearchPresets\CrossSellingItems;

class K8themeSingleItemContext extends SingleItemContext implements ContextInterface
{
	public $accessory;
  public $similar;
  public $replacementpart;
	public function init($params)
	{
		parent::init($params);
		$options = array(
        			"itemId" => $this->item['documents'][0]['data']['item']['id'],
        			"relation" => "Accessory"      // Nutze die Liste Zubehoer
       		);
 		$searchfactory = CrossSellingItems::getSearchFactory( $options );
 		$searchfactory->setPage(1, 4); // Begrenze auf 4 Artikel
  	$result = pluginApp(ItemSearchService::class)->getResult($searchfactory);
  	$this->accessory = $result['documents'];

    $options = array(
              "itemId" => $this->item['documents'][0]['data']['item']['id'],
              "relation" => "Similar"      // Nutze die Liste Ähnlich
          );
    $searchfactory = CrossSellingItems::getSearchFactory( $options );
  	$searchfactory->setPage(1, 4); // Begrenze auf 4 Artikel
  	$result = pluginApp(ItemSearchService::class)->getResult($searchfactory);
    $this->similar= $result['documents'];

    $options = array(
              "itemId" => $this->item['documents'][0]['data']['item']['id'],
              "relation" => "ReplacementPart"      // Nutze die Liste Ersatzteil
          );
    $searchfactory = CrossSellingItems::getSearchFactory( $options );
    $searchfactory->setPage(1, 4); // Begrenze auf 4 Artikel
    $result = pluginApp(ItemSearchService::class)->getResult($searchfactory);
    $this->replacementpart= $result['documents'];
	}
}
