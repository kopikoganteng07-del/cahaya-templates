<?php
// Template T9 — auto-generated 2026-09-09 (watcher master Template_Baru)
$d = null;
foreach ([__DIR__ . '/data/data.json', __DIR__ . '/data.json'] as $f) {
    if (is_readable($f)) { $d = json_decode(file_get_contents($f), true); if ($d) break; }
}
$site = $d['homepage']['site'] ?? strtoupper(preg_replace('/^www\./', '', $_SERVER['HTTP_HOST'] ?? ''));
$url = $d['url'] ?? ('https://' . ($_SERVER['HTTP_HOST'] ?? ''));
$dom = $d['domain'] ?? preg_replace('/^www\./', '', parse_url($url, PHP_URL_HOST) ?? '');
$tit = $d['homepage']['title'] ?? $site;
$des = $d['homepage']['description'] ?? '';
$cta = $d['cta_url'] ?? $url;
$page = <<<'HTMLPAGE'
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%%TITLE%%</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Prism.js Tomorrow Theme & Line Numbers -->
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/line-numbers/prism-line-numbers.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary min-vh-100 d-flex flex-column">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-file-code me-2" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                    <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"/>
                </svg>
                PasteBin
            </a>
            
            <div class="d-flex align-items-center gap-2">
                <button id="historyBtn" class="btn btn-outline-light btn-sm" title="Recent Pastes">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history me-1" viewBox="0 0 16 16">
                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7 7 0 0 0-.985-.299l.219-.976c.383.086.758.2 1.115.342l-.349.933zM12.73 2.58a7 7 0 0 0-.841-.608l.512-.859c.34.203.66.434.957.69l-.628.777zM14.654 4.34a7 7 0 0 0-.616-.83l.772-.635c.264.32.5.663.708 1.025l-.864.44zM15.485 6.5a7 7 0 0 0-.297-.984l.974-.222c.144.357.257.732.343 1.115l-.994.091zM16 8c0 .198-.007.394-.022.589l-.997-.074a7 7 0 0 0 .019-.515h1zm-.45 2.004a7 7 0 0 0 .299-.985l.976.219c-.086.383-.2.758-.342 1.115l-.933-.349zM14.42 12.73a7 7 0 0 0 .608-.841l.859.512c-.203.34-.434.66-.69.957l-.777-.628zM12.66 14.654a7 7 0 0 0 .83-.616l.635.772c-.32.264-.663.5-1.025.708l-.44-.864zM10.5 15.485a7 7 0 0 0 .984-.297l.222.974c-.357.144-.732.257-1.115.343l-.091-.994zM8 16a7 7 0 0 0-.515-.019l.074-.997A8 8 0 0 1 8 15v1zm-2.004-.45a7 7 0 0 0 .985.299l-.219.976a8 8 0 0 1-1.115-.342l.349-.933zm-2.226-1.104a7 7 0 0 0 .841.608l-.512.859a8 8 0 0 1-.957-.69l.628-.777zm-1.924-1.76a7 7 0 0 0 .616.83l-.772.635a8 8 0 0 1-.708-1.025l.864-.44zM.515 9.5a7 7 0 0 0 .297.984l-.974.222a8 8 0 0 1-.343-1.115l.994-.091zM0 8c0-.198.007-.394.022-.589l.997.074A7 7 0 0 0 1 8H0zm.45-2.004a7 7 0 0 0-.299.985l-.976-.219a8 8 0 0 1 .342-1.115l.933.349zM1.58 3.27a7 7 0 0 0-.608.841l-.859-.512c.203-.34.434-.66.69-.957l.777.628zM3.34 1.346a7 7 0 0 0-.83.616l-.635-.772a8 8 0 0 1 1.025-.708l.44.864zM5.5 1.515a7 7 0 0 0-.984.297l-.222-.974a8 8 0 0 1 1.115-.343l.091.994z"/>
                        <path d="M8.5 4.5a.5.5 0 0 0-1 0v3.793L5.354 10.146a.5.5 0 1 0 .707.708l3-3A.5.5 0 0 0 8.5 7.5V4.5z"/>
                    </svg>
                    History
                </button>
                <button id="themeToggleBtn" class="btn btn-outline-light btn-sm" title="Toggle Dark/Light Mode">
                    🌙 Mode
                </button>
                <a href="/" id="newPasteBtn" class="btn btn-primary btn-sm d-none">+ New</a>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <main class="container my-4 flex-grow-1">
        <!-- Loader Section -->
        <div id="loadingSection" class="text-center py-5 d-none">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="text-secondary mt-2">Loading paste details...</p>
        </div>

        <!-- Error Section -->
        <div id="errorSection" class="card shadow-sm border-0 d-none text-center p-4">
            <div class="text-danger mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </div>
            <h4 id="errorTitle" class="fw-bold text-danger">Error</h4>
            <p id="errorMessage" class="text-secondary">Paste not found or expired.</p>
            <div><a href="/" class="btn btn-primary btn-sm mt-2">Back to Home</a></div>
        </div>

        <!-- View Section -->
        <div id="viewSection" class="d-none">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body p-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <h5 id="viewFilename" class="fw-bold mb-1 font-monospace text-primary">paste.txt</h5>
                        <div class="text-secondary small d-flex flex-wrap gap-3">
                            <span><strong>Language:</strong> <span id="viewLanguage">TEXT</span></span>
                            <span><strong>Created:</strong> <span id="viewCreated">-</span></span>
                            <span><strong>Expires:</strong> <span id="viewExpires">Never</span></span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <a id="rawBtn" href="#" target="_blank" class="btn btn-outline-secondary btn-sm">Raw</a>
                        <a id="downloadBtn" href="#" class="btn btn-outline-secondary btn-sm">Download</a>
                        <button id="previewBtn" class="btn btn-outline-success btn-sm d-none">Preview</button>
                        <button id="qrBtn" class="btn btn-outline-secondary btn-sm">QR Code</button>
                        <button id="copyWgetBtn" class="btn btn-outline-primary btn-sm">Copy wget</button>
                        <button id="copyCurlBtn" class="btn btn-outline-primary btn-sm">Copy curl</button>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <pre class="line-numbers m-0 rounded" style="max-height: 75vh;"><code id="viewCode" class="language-none"></code></pre>
                </div>
            </div>

            <div id="previewContainer" class="card shadow-sm border-0 mt-3 d-none">
                <div class="card-header bg-body py-2 d-flex justify-content-between align-items-center">
                    <span class="fw-semibold small">Preview</span>
                    <button id="closePreviewBtn" class="btn-close btn-sm"></button>
                </div>
                <div class="card-body p-0">
                    <iframe id="previewFrame" class="w-100 border-0 rounded-bottom" style="min-height: 400px;"></iframe>
                </div>
            </div>
        </div>

        <!-- Success Section (After Create) -->
        <div id="successCard" class="card shadow-sm border-0 mb-4 border-start border-success border-4 d-none">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                    <span class="badge bg-success me-2 fs-6">✓ Success</span>
                    <h5 class="fw-bold m-0">Paste Created Successfully!</h5>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold small text-secondary">View URL</label>
                        <div class="input-group">
                            <input type="text" id="succViewUrl" class="form-control form-readonly" readonly>
                            <button class="btn btn-outline-secondary copy-trigger" data-target="succViewUrl">Copy</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold small text-secondary">Raw URL</label>
                        <div class="input-group">
                            <input type="text" id="succRawUrl" class="form-control form-readonly" readonly>
                            <button class="btn btn-outline-secondary copy-trigger" data-target="succRawUrl">Copy</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold small text-secondary">Download URL</label>
                        <div class="input-group">
                            <input type="text" id="succDownloadUrl" class="form-control form-readonly" readonly>
                            <button class="btn btn-outline-secondary copy-trigger" data-target="succDownloadUrl">Copy</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold small text-secondary">Delete URL (Secret Key)</label>
                        <div class="input-group">
                            <input type="text" id="succDeleteUrl" class="form-control form-readonly text-danger" readonly>
                            <button class="btn btn-outline-secondary copy-trigger" data-target="succDeleteUrl">Copy</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold small text-secondary">Wget Command</label>
                        <div class="input-group">
                            <input type="text" id="succWget" class="form-control form-readonly font-monospace" readonly>
                            <button class="btn btn-outline-primary copy-trigger" data-target="succWget">Copy wget</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold small text-secondary">Curl Command</label>
                        <div class="input-group">
                            <input type="text" id="succCurl" class="form-control form-readonly font-monospace" readonly>
                            <button class="btn btn-outline-primary copy-trigger" data-target="succCurl">Copy curl</button>
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-end d-flex justify-content-end gap-2">
                    <button id="showQrBtn" class="btn btn-outline-secondary">Show QR Code</button>
                    <a id="openViewBtn" href="#" class="btn btn-primary">View Paste</a>
                </div>
            </div>
        </div>

        <!-- Create Section -->
        <div id="createSection" class="card shadow-sm border-0">
            <div class="card-header bg-body py-3 border-bottom d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">New Paste</h5>
                <span class="badge text-bg-light border font-monospace" id="counterBadge">0 chars | 0 lines</span>
            </div>
            <div class="card-body p-4">
                <form id="pasteForm">
                    <div class="row g-3 mb-3">
                        <div class="col-md-5">
                            <label for="filename" class="form-label fw-semibold">Filename</label>
                            <input type="text" class="form-control" id="filename" name="filename" placeholder="e.g. index.html" autocomplete="off">
                        </div>

                        <div class="col-md-4">
                            <label for="language" class="form-label fw-semibold">Language Syntax</label>
                            <select class="form-select" id="language" name="language">
                                <option value="auto">Auto Detect</option>
                                <option value="html">HTML</option>
                                <option value="php">PHP</option>
                                <option value="css">CSS</option>
                                <option value="javascript">JavaScript</option>
                                <option value="json">JSON</option>
                                <option value="sql">SQL</option>
                                <option value="xml">XML</option>
                                <option value="markdown">Markdown</option>
                                <option value="text">TXT</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="expiration" class="form-label fw-semibold">Expiration</label>
                            <select class="form-select" id="expiration" name="expiration">
                                <option value="never">Never</option>
                                <option value="10m">10 Minutes</option>
                                <option value="1h">1 Hour</option>
                                <option value="6h">6 Hours</option>
                                <option value="1d">1 Day</option>
                                <option value="7d">7 Days</option>
                                <option value="30d">30 Days</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="content" class="form-label fw-semibold mb-0">Code / Text</label>
                            <span class="text-muted small">Tab indent supported & Drag & Drop file (Max 5MB)</span>
                        </div>
                        <div class="drop-zone-wrapper">
                            <textarea class="form-control font-monospace drop-zone" id="content" name="content" rows="14" placeholder="Paste your code here..." required></textarea>
                            <div class="drop-zone-overlay d-none align-items-center justify-content-center">
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-cloud-upload text-primary mb-2" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.8 16 6.16 16 7.8 16 9.567 14.567 11 12.8 11H11.7a1 1 0 0 1 0-2h1.1c.995 0 1.8-.805 1.8-1.8 0-.995-.805-1.8-1.8-1.8a.5.5 0 0 1-.5-.43C12.11 2.983 10.28 1.5 8 1.5c-2.17 0-3.957 1.378-4.28 3.398a.5.5 0 0 1-.49.432C1.942 5.433 1 6.55 1 7.9 1 9.336 2.164 10.5 3.6 10.5H5a1 1 0 0 1 0 2H3.6C1.612 12.5 0 10.888 0 8.9c0-1.782 1.297-3.265 3.012-3.57.262-2.316 2.21-4.088 4.606-4.088z"/>
                                        <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                    <h6 class="fw-bold text-primary">Drop file here to upload</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-secondary small">Max size: 5 MB</span>
                        <button type="submit" id="submitBtn" class="btn btn-primary px-4 fw-semibold">
                            Create Paste
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- History Offcanvas Drawer -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="historyDrawer" aria-labelledby="historyDrawerLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title fw-bold" id="historyDrawerLabel">Recent Pastes</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-3">
            <div id="historyList" class="list-group list-group-flush">
                <p class="text-muted small">No recent pastes stored locally.</p>
            </div>
        </div>
    </div>

    <!-- QR Code Modal -->
    <div class="modal fade" id="qrModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content text-center p-3">
                <h5 class="fw-bold mb-2">Raw URL QR Code</h5>
                <div id="qrCodeContainer" class="d-flex justify-content-center my-3"></div>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="appToast" class="toast align-items-center text-white bg-dark border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body" id="toastMessage">Copied to clipboard!</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- External Libraries (Bootstrap, Prism, QRCode) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-css.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-clike.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-javascript.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-php.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-json.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-sql.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-markdown.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcode-generator@1.4.4/qrcode.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>

HTMLPAGE;
$page = strtr($page, ['%%TITLE%%'=>$tit,'%%DESCRIPTION%%'=>$des,'%%SITE%%'=>$site,'%%URL%%'=>$url,'%%DOMAIN%%'=>$dom,'%%CTA_URL%%'=>$cta]);
header('Content-Type: text/html; charset=utf-8');
echo $page;
