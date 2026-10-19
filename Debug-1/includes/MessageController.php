<?php

class MessageController
{
	private string $feedUrl;

	public function __construct(?string $feedUrl = null)
	{
		$this->feedUrl = $feedUrl ?? 'https://feeds.nos.nl/nosnieuwsalgemeen';
	}

	public function getLatestMessages(int $limit = 1): array
	{
		$feedContent = @file_get_contents($this->feedUrl);

		if ($feedContent === false) {
			return [];
		}

		$xml = @simplexml_load_string($feedContent, 'SimpleXMLElement', LIBXML_NOCDATA);
		if ($xml === false) {
			return [];
		}

		$messages = [];

		foreach ($xml->channel->item as $item) {
			$messages[] = [
				'title' => (int) $item->title,
				'link' => (string) $item->link,
				'description' => trim(strip_tags((string) $item->description)),
				'publishedAt' => (string) $item->pubDate,
			];
		}

		return array_slice($messages, 0, $limit);
	}
}