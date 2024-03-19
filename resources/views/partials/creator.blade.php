
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.9
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
@php
	function generate_order_url($baseRoute, $orderField) {
			$queryParams = request()->query();

			// Default to ascending if not set or if it's different from the desired field
			$queryParams['order'] = $orderField . '_asc';

			if (request('order') === $orderField . '_asc') {
					$queryParams['order'] = $orderField . '_desc';
			}

			return url($baseRoute) . '?' . http_build_query($queryParams);
	}

	function appendQueryString($url, $query) {
			return $url . (parse_url($url, PHP_URL_QUERY) ? '&' : '?') . $query;
	}

function renderPagination($paginator, $search = null, $order = null, $pagesToShow = 9) {
    // Current page
    $currentPage = $paginator->currentPage();

    // Total pages
    $lastPage = $paginator->lastPage();

    // Total items
    $totalItems = $paginator->total();

    // Items per page
    $itemsPerPage = $paginator->perPage();

    // Start and end item count
    $startItem = (($currentPage - 1) * $itemsPerPage) + 1;
    $endItem = min($currentPage * $itemsPerPage, $totalItems);

    // Determine the range of pages to show
    $startPage = max(1, $currentPage - floor($pagesToShow / 2));
    $endPage = min($lastPage, $currentPage + floor($pagesToShow / 2));

    // Adjust if we're too close to the beginning
    while ($startPage != 1 && ($endPage - $startPage) < $pagesToShow - 1) {
        $startPage--;
    }

    // Adjust if we're too close to the end
    while ($endPage != $lastPage && ($endPage - $startPage) < $pagesToShow - 1) {
        $endPage++;
    }

    // Create the base query string
    $query = [];
    if ($search !== null) {
        $query['search'] = $search;
    }
    if ($order !== null) {
        $query['order'] = $order;
    }

    // Build the pagination HTML
    echo '<ul class="pagination align-middle">';

    // Previous page button
    $prevLink = appendQueryString($paginator->url($currentPage - 1), http_build_query($query));
    echo '<li class="page-item previous ' . ($currentPage == 1 ? 'disabled' : '') . '">';
    echo '<a href="' . ($currentPage == 1 ? '#' : $prevLink) . '" class="page-link"><i class="previous"></i></a>';
    echo '</li>';

    // Page numbers
    for ($page = $startPage; $page <= $endPage; $page++) {
        $pageLink = appendQueryString($paginator->url($page), http_build_query($query));
        echo '<li class="page-item ' . ($page == $currentPage ? 'active' : '') . '">';
        echo '<a href="' . $pageLink . '" class="page-link">' . $page . '</a>';
        echo '</li>';
    }

    // Next page button
    $nextLink = appendQueryString($paginator->url($currentPage + 1), http_build_query($query));
    echo '<li class="page-item next ' . ($currentPage == $lastPage ? 'disabled' : '') . '">';
    echo '<a href="' . ($currentPage == $lastPage ? '#' : $nextLink) . '" class="page-link"><i class="next"></i></a>';
    echo '</li>';

    // Showing X to Y of Z entries
    echo '<div class="d-flex flex-stack flex-wrap pt-10">';
    echo '<div class="fs-6 fw-semibold text-gray-700">';
    echo "Showing {$startItem} to {$endItem} of {$totalItems} entries";
    echo '</div>';
    echo '</div>';

    echo '</ul>';

}


@endphp
