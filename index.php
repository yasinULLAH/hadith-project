<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yasin Ullah, Pakistani">
    <title>Hadith Gems Offline - By Yasin Ullah</title>
    <style>
        :root {
            --font-arabic: 'Noto Naskh Arabic', ' Amiri', serif;
            --font-main: 'Merriweather', serif;
            --font-futuristic: 'Orbitron', sans-serif;

            /* Light Theme (Default) */
            --bg-color: #f5f5dc; /* Parchment */
            --text-color: #3a2c20; /* Dark Brown */
            --primary-color: #8b4513; /* SaddleBrown */
            --secondary-color: #deb887; /* BurlyWood */
            --accent-color: #5a3d2b;
            --card-bg: #fff8e7;
            --border-color: #d2b48c; /* Tan */
            --button-bg: #c8a079;
            --button-text: #ffffff;
            --input-bg: #ffffff;
            --input-border: #b08d57;
            --link-color: #654321; /* Darker Brown */
        }

        [data-theme="dark"] {
            --bg-color: #1e1e2f; /* Dark Blue-Gray */
            --text-color: #e0e0e0; /* Light Gray */
            --primary-color: #7aa2f7; /* Light Blue */
            --secondary-color: #3e4168; /* Darker Blue */
            --accent-color: #bb9af7; /* Lavender */
            --card-bg: #2a2a40;
            --border-color: #4a4a6a;
            --button-bg: #565f89;
            --button-text: #e0e0e0;
            --input-bg: #30304f;
            --input-border: #5a5a8a;
            --link-color: #9eceeb;
        }

        [data-theme="futuristic"] {
            --font-main: 'Orbitron', sans-serif;
            --bg-color: #0d0d1a; /* Very Dark Blue */
            --text-color: #00ffcc; /* Neon Cyan */
            --primary-color: #ff00ff; /* Neon Magenta */
            --secondary-color: #33334d; /* Dark Purple-Blue */
            --accent-color: #00ffff; /* Bright Cyan */
            --card-bg: #1a1a33;
            --border-color: #4d4dff; /* Neon Blue */
            --button-bg: #ff00ff;
            --button-text: #0d0d1a;
            --input-bg: #22223b;
            --input-border: #6666ff;
            --link-color: #00ffff;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Noto+Naskh+Arabic:wght@400;700&family=Orbitron:wght@400;700&display=swap');

        body {
            font-family: var(--font-main);
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            transition: background-color 0.3s, color 0.3s;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: var(--secondary-color);
            color: var(--text-color);
            padding: 1em;
            text-align: center;
            border-bottom: 2px solid var(--border-color);
        }

        header h1 {
            margin: 0;
            font-size: 2em;
            color: var(--primary-color);
        }
        
        .author-tag {
            font-size: 0.9em;
            color: var(--accent-color);
        }

        nav {
            background-color: var(--secondary-color);
            padding: 0.5em;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        nav ul li {
            margin: 5px;
        }

        nav ul li button {
            background-color: var(--button-bg);
            color: var(--button-text);
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            font-family: var(--font-main);
            font-size: 0.9em;
            transition: background-color 0.2s;
        }

        nav ul li button:hover, nav ul li button.active {
            background-color: var(--primary-color);
        }

        .view {
            display: none;
            padding: 15px;
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .view.active {
            display: block;
        }

        .hadith-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .hadith-arabic {
            font-family: var(--font-arabic);
            font-size: 1.4em;
            direction: rtl;
            text-align: right;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .hadith-translation {
            font-size: 1em;
            margin-bottom: 10px;
            color: var(--text-color);
        }
        
        .hadith-translation-selector select {
            margin-bottom: 10px;
        }

        .hadith-source, .hadith-chapter, .hadith-notes, .hadith-tags-display, .hadith-grades {
            font-size: 0.9em;
            color: var(--accent-color);
            margin-bottom: 5px;
        }
        
        .hadith-tags-display .tag {
            background-color: var(--secondary-color);
            color: var(--text-color);
            padding: 2px 6px;
            border-radius: 3px;
            margin-right: 5px;
            font-size: 0.8em;
        }
        .hadith-grades .grade-item {
            display: inline-block;
            border: 1px solid var(--border-color);
            padding: 2px 5px;
            margin-right: 5px;
            border-radius: 3px;
            font-size: 0.8em;
        }


        .hadith-actions button {
            margin-right: 5px;
            font-size: 0.8em;
        }

        button, input[type="submit"], input[type="button"] {
            background-color: var(--button-bg);
            color: var(--button-text);
            border: 1px solid var(--accent-color);
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-family: var(--font-main);
            transition: background-color 0.2s;
        }

        button:hover, input[type="submit"]:hover, input[type="button"]:hover {
            background-color: var(--primary-color);
        }
        
        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
            border-color: #bbb;
            color: #777;
        }


        input[type="text"], input[type="number"], textarea, select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid var(--input-border);
            border-radius: 4px;
            background-color: var(--input-bg);
            color: var(--text-color);
            font-family: var(--font-main);
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: var(--text-color);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .filter-controls {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
            padding: 10px;
            background-color: var(--secondary-color);
            border-radius: 5px;
        }
        .filter-controls > * {
            flex-grow: 1;
            min-width: 150px;
        }

        #paginationControls {
            text-align: center;
            margin-top: 20px;
        }
        #paginationControls button {
            margin: 0 5px;
        }

        .message-area {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            text-align: center;
        }
        .message-area.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .message-area.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .message-area.info {
            background-color: #cce5ff;
            color: #004085;
            border: 1px solid #b8daff;
        }
        
        .loading-indicator {
            text-align: center;
            padding: 20px;
            font-size: 1.2em;
            color: var(--primary-color);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.6);
        }
        .modal-content {
            background-color: var(--card-bg);
            margin: 10% auto;
            padding: 20px;
            border: 1px solid var(--border-color);
            width: 80%;
            max-width: 600px;
            border-radius: 8px;
            position: relative;
        }
        .close-modal {
            color: var(--accent-color);
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close-modal:hover, .close-modal:focus {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            .filter-controls {
                flex-direction: column;
            }
            .modal-content {
                width: 95%;
                margin: 5% auto;
            }
        }
        
        .tag-management-area .tag-item, .collection-management-area .collection-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px;
            border: 1px solid var(--border-color);
            margin-bottom: 5px;
            border-radius: 4px;
        }
        .tag-management-area .tag-item button, .collection-management-area .collection-item button {
            margin-left: 5px;
        }
        
        #hadithOfTheDayCard .hadith-arabic { font-size: 1.6em; }
        #hadithOfTheDayCard .hadith-translation { font-size: 1.1em; }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            font-size: 0.9em;
            color: var(--accent-color);
            border-top: 1px solid var(--border-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Hadith Gems Offline</h1>
            <p class="author-tag">By Yasin Ullah (Pakistani)</p>
        </header>

        <nav>
            <ul>
                <li><button data-view="allHadithView">All Hadith</button></li>
                <li><button data-view="hadithOfTheDayView">Hadith of the Day</button></li>
                <li><button data-view="addHadithView">Add Hadith</button></li>
                <li><button data-view="collectionsView">Collections</button></li>
                <li><button data-view="tagsView">Tags</button></li>
                <li><button data-view="importView">Import Hadith</button></li>
                <li><button data-view="backupRestoreView">Backup/Restore</button></li>
                <li><button data-view="settingsView">Settings</button></li>
            </ul>
        </nav>

        <div id="messageAreaGlobal" class="message-area" style="display:none;"></div>

        <!-- All Hadith View -->
        <div id="allHadithView" class="view">
            <h2>All Hadith</h2>
            <div class="filter-controls">
                <input type="text" id="filterKeyword" placeholder="Search keyword...">
                <select id="filterBook"></select>
                <select id="filterChapter"></select>
                <select id="filterTag"></select>
                <select id="filterBookmark">
                    <option value="">All Statuses</option>
                    <option value="bookmarked">Bookmarked</option>
                    <option value="not_bookmarked">Not Bookmarked</option>
                </select>
                <button id="applyFiltersBtn">Apply Filters</button>
                <button id="resetFiltersBtn">Reset Filters</button>
            </div>
            <div id="hadithListContainer"></div>
            <div id="paginationControls"></div>
        </div>

        <!-- Hadith of the Day View -->
        <div id="hadithOfTheDayView" class="view">
            <h2>Hadith of the Day</h2>
            <div class="form-group">
                <label for="hotdTagFilter">Filter by Tag (Optional):</label>
                <select id="hotdTagFilter"></select>
                <button id="generateHotDBtn" style="margin-top:10px;">Show Hadith of the Day</button>
            </div>
            <div id="hadithOfTheDayCard"></div>
        </div>

        <!-- Add/Edit Hadith View -->
        <div id="addHadithView" class="view">
            <h2 id="addEditHadithTitle">Add New Hadith</h2>
            <form id="hadithForm">
                <input type="hidden" id="hadithIdInput">
                <input type="hidden" id="hadithUuidInput">
                <div class="form-group">
                    <label for="hadithArabicText">Arabic Text:</label>
                    <textarea id="hadithArabicText" rows="5" required style="direction:rtl; font-family: var(--font-arabic); font-size: 1.2em;"></textarea>
                </div>
                <div class="form-group">
                    <label for="hadithPrimaryTranslationText">Primary Translation Text:</label>
                    <textarea id="hadithPrimaryTranslationText" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="hadithPrimaryTranslationLang">Primary Translation Language (e.g., English, Urdu):</label>
                    <input type="text" id="hadithPrimaryTranslationLang" value="English" required>
                </div>
                <div class="form-group">
                    <label for="hadithPrimaryTranslationEdition">Primary Translation Edition/Author (e.g., Muhsin Khan):</label>
                    <input type="text" id="hadithPrimaryTranslationEdition" value="Manual Entry" required>
                </div>
                <div class="form-group">
                    <label for="hadithSourceBook">Source Book (e.g., Sahih al-Bukhari):</label>
                    <input type="text" id="hadithSourceBook" required>
                </div>
                <div class="form-group">
                    <label for="hadithSourceChapterNumber">Chapter Number:</label>
                    <input type="text" id="hadithSourceChapterNumber">
                </div>
                 <div class="form-group">
                    <label for="hadithSourceChapterName">Chapter Name (Optional):</label>
                    <input type="text" id="hadithSourceChapterName">
                </div>
                <div class="form-group">
                    <label for="hadithSourceHadithNumber">Hadith Number in Book:</label>
                    <input type="text" id="hadithSourceHadithNumber">
                </div>
                <div class="form-group">
                    <label for="hadithNotes">Personal Notes:</label>
                    <textarea id="hadithNotes" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="hadithTagsInput">Tags (comma-separated):</label>
                    <input type="text" id="hadithTagsInput">
                    <div id="existingTagsForHadithForm" style="margin-top:5px;"></div>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" id="hadithBookmarked"> Bookmark this Hadith
                    </label>
                </div>
                <button type="submit" id="saveHadithBtn">Save Hadith</button>
                <button type="button" id="cancelEditHadithBtn" style="display:none;">Cancel Edit</button>
            </form>
            
            <div id="manageTranslationsSection" style="display:none; margin-top: 20px;">
                <h3>Manage Additional Translations</h3>
                <div id="additionalTranslationsList"></div>
                <h4>Add New Translation</h4>
                <form id="addTranslationForm">
                    <div class="form-group">
                        <label for="newTranslationText">Translation Text:</label>
                        <textarea id="newTranslationText" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="newTranslationLang">Language:</label>
                        <input type="text" id="newTranslationLang" required>
                    </div>
                    <div class="form-group">
                        <label for="newTranslationEdition">Edition/Author:</label>
                        <input type="text" id="newTranslationEdition" required>
                    </div>
                    <button type="submit">Add Translation</button>
                </form>
            </div>
        </div>

        <!-- Collections View -->
        <div id="collectionsView" class="view">
            <h2>Manage Collections</h2>
            <div class="form-group">
                <label for="newCollectionName">New Collection Name:</label>
                <input type="text" id="newCollectionName" placeholder="e.g., Patience, Charity">
                <label for="newCollectionDesc">Description (Optional):</label>
                <textarea id="newCollectionDesc" rows="2"></textarea>
                <button id="addCollectionBtn">Add Collection</button>
            </div>
            <div id="collectionsList" class="collection-management-area"></div>
        </div>
        
        <!-- Collection Detail View (Modal or separate section) -->
        <div id="collectionDetailModal" class="modal">
            <div class="modal-content">
                <span class="close-modal" id="closeCollectionDetailModal">&times;</span>
                <h3 id="collectionDetailName"></h3>
                <p id="collectionDetailDesc"></p>
                <h4>Hadith in this Collection:</h4>
                <div id="collectionDetailHadithList"></div>
                <h4>Add Hadith to Collection:</h4>
                <select id="addHadithToCollectionSelect" multiple size="5" style="width:100%;"></select>
                <button id="saveHadithToCollectionBtn" style="margin-top:10px;">Add Selected Hadith</button>
            </div>
        </div>


        <!-- Tags View -->
        <div id="tagsView" class="view">
            <h2>Manage Tags</h2>
            <div class="form-group">
                <label for="newTagName">New Tag Name:</label>
                <input type="text" id="newTagName" placeholder="e.g., Faith, Prayer">
                <button id="addTagBtn">Add Tag</button>
            </div>
            <div id="tagsList" class="tag-management-area"></div>
        </div>

        <!-- Import Hadith View -->
        <div id="importView" class="view">
            <h2>Import Hadith from Local Files</h2>
            <p>Select a Hadith book and editions to import from local files. Ensure 'info.json' and Hadith text files are correctly placed.</p>
            <div class="form-group">
                <label for="importBookSelect">Select Book:</label>
                <select id="importBookSelect"></select>
            </div>
            <div class="form-group">
                <label for="importArabicEditionSelect">Select Arabic Edition (Local File):</label>
                <select id="importArabicEditionSelect"></select>
            </div>
            <div class="form-group">
                <label for="importTranslationEditionSelect">Select Primary Translation Edition (Local File):</label>
                <select id="importTranslationEditionSelect"></select>
            </div>
            <button id="startImportBtn">Start Import</button>
            <div id="importProgress" style="margin-top:15px;"></div>
            
            <h3 style="margin-top:30px;">Manage Imported Book Data</h3>
            <div class="form-group">
                <label for="manageBookDataSelect">Select Imported Book:</label>
                <select id="manageBookDataSelect"></select>
            </div>
            <button id="refreshChapterNamesBtn">Refresh Chapter Names for Selected Book</button>
            <div id="manageBookDataProgress" style="margin-top:10px;"></div>
            
            <h4 style="margin-top:20px;">Add Another Translation Edition to Selected Book (from Local File)</h4>
            <div class="form-group">
                <label for="addTranslationToBookEditionSelect">Select New Translation Edition:</label>
                <select id="addTranslationToBookEditionSelect"></select>
            </div>
            <button id="addAnotherTranslationBtn">Add This Translation to Book</button>
            <div id="addTranslationProgress" style="margin-top:10px;"></div>
        </div>

        <!-- Backup/Restore View -->
        <div id="backupRestoreView" class="view">
            <h2>Backup & Restore Data</h2>
            <p>Backup your Hadith collection, tags, and settings. Restore from a previously saved backup file.</p>
            <div class="form-group">
                <button id="backupDataBtn">Backup All Data</button>
            </div>
            <div class="form-group">
                <label for="restoreFile">Select Backup File to Restore:</label>
                <input type="file" id="restoreFile" accept=".json">
                <button id="restoreDataBtn" style="margin-top:10px;">Restore Data</button>
                <p><small><strong>Warning:</strong> Restoring will overwrite existing data.</small></p>
            </div>
        </div>

        <!-- Settings View -->
        <div id="settingsView" class="view">
            <h2>Settings</h2>
            <div class="form-group">
                <label for="themeSelector">Select Theme:</label>
                <select id="themeSelector">
                    <option value="light">Light (Manuscript)</option>
                    <option value="dark">Dark</option>
                    <option value="futuristic">Futuristic</option>
                </select>
            </div>
             <div class="form-group">
                <label for="itemsPerPageSelector">Items Per Page (All Hadith View):</label>
                <select id="itemsPerPageSelector">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
        
        <!-- Edit Tag Modal -->
        <div id="editTagModal" class="modal">
            <div class="modal-content">
                <span class="close-modal" id="closeEditTagModal">&times;</span>
                <h3>Edit Tag</h3>
                <input type="hidden" id="editingOldTagName">
                <div class="form-group">
                    <label for="editingNewTagName">New Tag Name:</label>
                    <input type="text" id="editingNewTagName">
                </div>
                <button id="saveEditedTagBtn">Save Changes</button>
            </div>
        </div>

        <!-- Edit Collection Modal -->
        <div id="editCollectionModal" class="modal">
            <div class="modal-content">
                <span class="close-modal" id="closeEditCollectionModal">&times;</span>
                <h3>Edit Collection</h3>
                <input type="hidden" id="editingCollectionId">
                <div class="form-group">
                    <label for="editingCollectionName">Collection Name:</label>
                    <input type="text" id="editingCollectionName">
                </div>
                <div class="form-group">
                    <label for="editingCollectionDesc">Description:</label>
                    <textarea id="editingCollectionDesc" rows="3"></textarea>
                </div>
                <button id="saveEditedCollectionBtn">Save Changes</button>
            </div>
        </div>


        <footer>
            <p>&copy; <span id="currentYear"></span> Hadith Gems Offline. Crafted by Yasin Ullah (Pakistani).</p>
            <p><small>Hadith data sourced from local files. Original API by fawazahmed0.</small></p>
        </footer>
    </div>

    <script id="editionsData" type="application/json">
{
	"abudawud": {
		"name": "Sunan Abu Dawud",
		"collection": [
			{
				"name": "ara-abudawud", "book": "abudawud", "author": "Unknown", "language": "Arabic"
			},
			{
				"name": "ara-abudawud1", "book": "abudawud", "author": "Unknown (No Diacritics)", "language": "Arabic"
			},
			{
				"name": "urd-abudawud", "book": "abudawud", "author": "Unknown", "language": "Urdu"
			}
		]
	},
	"bukhari": {
		"name": "Sahih al Bukhari",
		"collection": [
			{
				"name": "ara-bukhari", "book": "bukhari", "author": "Unknown", "language": "Arabic" 
			},
            {
				"name": "ara-bukhari1", "book": "bukhari", "author": "Unknown (No Diacritics)", "language": "Arabic"
			},
			{
				"name": "eng-bukhari", "book": "bukhari", "author": "Muhsin Khan", "language": "English"
			},
			{
				"name": "urd-bukhari", "book": "bukhari", "author": "Unknown", "language": "Urdu"
			}
		]
	},
	"dehlawi": {
		"name": "Forty Hadith of Shah Waliullah Dehlawi",
		"collection": [
			{
				"name": "ara-dehlawi", "book": "dehlawi", "author": "Shah Waliullah Dehlawi", "language": "Arabic"
			},
			{
				"name": "eng-dehlawi", "book": "dehlawi", "author": "Shah Waliullah Dehlawi", "language": "English"
			}
		]
	},
	"ibnmajah": {
		"name": "Sunan Ibn Majah",
		"collection": [
			{
				"name": "ara-ibnmajah", "book": "ibnmajah", "author": "Unknown", "language": "Arabic"
			},
            {
				"name": "ara-ibnmajah1", "book": "ibnmajah", "author": "Unknown (No Diacritics)", "language": "Arabic"
			},
			{
				"name": "urd-ibnmajah", "book": "ibnmajah", "author": "Unknown", "language": "Urdu"
			}
		]
	},
	"malik": {
		"name": "Muwatta Malik",
		"collection": [
			{
				"name": "ara-malik", "book": "malik", "author": "Unknown", "language": "Arabic"
			},
            {
				"name": "ara-malik1", "book": "malik", "author": "Unknown (No Diacritics)", "language": "Arabic"
			},
			{
				"name": "urd-malik", "book": "malik", "author": "Unknown", "language": "Urdu"
			}
		]
	},
	"muslim": {
		"name": "Sahih Muslim",
		"collection": [
			{
				"name": "ara-muslim", "book": "muslim", "author": "Unknown", "language": "Arabic"
			},
            {
				"name": "ara-muslim1", "book": "muslim", "author": "Unknown (No Diacritics)", "language": "Arabic"
			},
			{
				"name": "eng-muslim", "book": "muslim", "author": "Abdul Hamid Siddiqui", "language": "English"
			}
		]
	},
	"nasai": {
		"name": "Sunan an Nasai",
		"collection": [
			{
				"name": "ara-nasai", "book": "nasai", "author": "Unknown", "language": "Arabic"
			},
            {
				"name": "ara-nasai1", "book": "nasai", "author": "Unknown (No Diacritics)", "language": "Arabic"
			},
			{
				"name": "eng-nasai", "book": "nasai", "author": "Unknown", "language": "English"
			},
			{
				"name": "urd-nasai", "book": "nasai", "author": "Unknown", "language": "Urdu"
			}
		]
	},
	"nawawi": {
		"name": "Forty Hadith of an-Nawawi",
		"collection": [
			{
				"name": "ara-nawawi", "book": "nawawi", "author": "Imam Nawawi", "language": "Arabic"
			},
			{
				"name": "eng-nawawi", "book": "nawawi", "author": "Imam Nawawi", "language": "English"
			}
		]
	},
	"qudsi": {
		"name": "Forty Hadith Qudsi",
		"collection": [
			{
				"name": "ara-qudsi", "book": "qudsi", "author": "Unknown", "language": "Arabic"
			},
			{
				"name": "eng-qudsi", "book": "qudsi", "author": "Unknown", "language": "English"
			}
		]
	},
	"tirmidhi": {
		"name": "Jami At Tirmidhi",
		"collection": [
			{
				"name": "ara-tirmidhi", "book": "tirmidhi", "author": "Unknown", "language": "Arabic"
			},
            {
				"name": "ara-tirmidhi1", "book": "tirmidhi", "author": "Unknown (No Diacritics)", "language": "Arabic"
			},
			{
				"name": "eng-tirmidhi", "book": "tirmidhi", "author": "Unknown", "language": "English"
			},
			{
				"name": "urd-tirmidhi", "book": "tirmidhi", "author": "Unknown", "language": "Urdu"
			}
		]
	}
}
    </script>

    <script>
        // --- START OF SCRIPT ---
        const App = (() => {
            const DB_NAME = 'HadithGemsDB';
            const DB_VERSION = 2; // Incremented due to potential schema change for info.json
            const STORES = {
                hadiths: 'hadiths',
                tags: 'tags',
                collections: 'collections',
                chapterInfo: 'chapterInfo', 
                settings: 'settings' // Will store localInfoJSONData here
            };
            const LOCAL_HADITH_FILES_DIR = 'Ahadith Books in single file yasin/';
            const LOCAL_INFO_FILE = 'info.json';
            const LOCAL_INFO_JSON_DB_KEY = 'localInfoJSONDataContent'; // Key for storing info.json in IndexedDB


            let db;
            let editionsJSON; 
            let localInfoJSONData; 
            let currentFilters = {};
            let currentPage = 1;
            let itemsPerPage = 10; 

            // UI Elements
            const views = {};
            const messageAreaGlobal = document.getElementById('messageAreaGlobal');
            
            const hadithListContainer = document.getElementById('hadithListContainer');
            const paginationControls = document.getElementById('paginationControls');
            const filterKeyword = document.getElementById('filterKeyword');
            const filterBook = document.getElementById('filterBook');
            const filterChapter = document.getElementById('filterChapter');
            const filterTag = document.getElementById('filterTag');
            const filterBookmark = document.getElementById('filterBookmark');

            const hadithForm = document.getElementById('hadithForm');
            const addEditHadithTitle = document.getElementById('addEditHadithTitle');
            const hadithIdInput = document.getElementById('hadithIdInput');
            const hadithUuidInput = document.getElementById('hadithUuidInput');
            const hadithArabicText = document.getElementById('hadithArabicText');
            const hadithPrimaryTranslationText = document.getElementById('hadithPrimaryTranslationText');
            const hadithPrimaryTranslationLang = document.getElementById('hadithPrimaryTranslationLang');
            const hadithPrimaryTranslationEdition = document.getElementById('hadithPrimaryTranslationEdition');
            const hadithSourceBook = document.getElementById('hadithSourceBook');
            const hadithSourceChapterNumber = document.getElementById('hadithSourceChapterNumber');
            const hadithSourceChapterName = document.getElementById('hadithSourceChapterName');
            const hadithSourceHadithNumber = document.getElementById('hadithSourceHadithNumber');
            const hadithNotes = document.getElementById('hadithNotes');
            const hadithTagsInput = document.getElementById('hadithTagsInput');
            const existingTagsForHadithForm = document.getElementById('existingTagsForHadithForm');
            const hadithBookmarked = document.getElementById('hadithBookmarked');
            const saveHadithBtn = document.getElementById('saveHadithBtn');
            const cancelEditHadithBtn = document.getElementById('cancelEditHadithBtn');
            const manageTranslationsSection = document.getElementById('manageTranslationsSection');
            const additionalTranslationsList = document.getElementById('additionalTranslationsList');
            const addTranslationForm = document.getElementById('addTranslationForm');

            const newTagNameInput = document.getElementById('newTagName');
            const tagsListContainer = document.getElementById('tagsList');
            const editTagModal = document.getElementById('editTagModal');
            const editingOldTagNameInput = document.getElementById('editingOldTagName');
            const editingNewTagNameInput = document.getElementById('editingNewTagName');

            const newCollectionNameInput = document.getElementById('newCollectionName');
            const newCollectionDescInput = document.getElementById('newCollectionDesc');
            const collectionsListContainer = document.getElementById('collectionsList');
            const collectionDetailModal = document.getElementById('collectionDetailModal');
            const collectionDetailName = document.getElementById('collectionDetailName');
            const collectionDetailDesc = document.getElementById('collectionDetailDesc');
            const collectionDetailHadithList = document.getElementById('collectionDetailHadithList');
            const addHadithToCollectionSelect = document.getElementById('addHadithToCollectionSelect');
            const editCollectionModal = document.getElementById('editCollectionModal');
            const editingCollectionIdInput = document.getElementById('editingCollectionId');
            const editingCollectionNameInput = document.getElementById('editingCollectionName');
            const editingCollectionDescInput = document.getElementById('editingCollectionDesc');
            let currentEditingCollectionId = null; 

            const importBookSelect = document.getElementById('importBookSelect');
            const importArabicEditionSelect = document.getElementById('importArabicEditionSelect');
            const importTranslationEditionSelect = document.getElementById('importTranslationEditionSelect');
            const importProgress = document.getElementById('importProgress');
            const startImportBtn = document.getElementById('startImportBtn');
            const manageBookDataSelect = document.getElementById('manageBookDataSelect');
            const manageBookDataProgress = document.getElementById('manageBookDataProgress');
            const refreshChapterNamesBtn = document.getElementById('refreshChapterNamesBtn');
            const addTranslationToBookEditionSelect = document.getElementById('addTranslationToBookEditionSelect');
            const addAnotherTranslationBtn = document.getElementById('addAnotherTranslationBtn');
            const addTranslationProgress = document.getElementById('addTranslationProgress');

            const hotdTagFilter = document.getElementById('hotdTagFilter');
            const hadithOfTheDayCardContainer = document.getElementById('hadithOfTheDayCard');

            const themeSelector = document.getElementById('themeSelector');
            const itemsPerPageSelector = document.getElementById('itemsPerPageSelector');

            const restoreFileInput = document.getElementById('restoreFile');


            // --- Utility Functions ---
            function _uuidv4() {
                return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
                    (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
                );
            }

            function _showMessage(message, type = 'info', area = messageAreaGlobal, duration = 5000) {
                area.textContent = message;
                area.className = `message-area ${type}`;
                area.style.display = 'block';
                if (duration > 0) {
                    setTimeout(() => {
                        if (area.textContent === message) { 
                           area.style.display = 'none';
                        }
                    }, duration);
                }
            }
            
            function _showLoading(container, message = "Loading...") {
                if (typeof container === 'string') container = document.getElementById(container);
                if(container) container.innerHTML = `<div class="loading-indicator">${message}</div>`;
            }

            function _clearLoading(container) {
                 if (typeof container === 'string') container = document.getElementById(container);
                 if(container && container.querySelector('.loading-indicator')) {
                    container.innerHTML = '';
                 }
            }


            // --- IndexedDB Functions ---
            async function _initDB() {
                return new Promise((resolve, reject) => {
                    const request = indexedDB.open(DB_NAME, DB_VERSION);

                    request.onupgradeneeded = (event) => {
                        const dbInstance = event.target.result;
                        const oldVersion = event.oldVersion;

                        if (oldVersion < 1) { // Initial creation
                            if (!dbInstance.objectStoreNames.contains(STORES.hadiths)) {
                                const hadithStore = dbInstance.createObjectStore(STORES.hadiths, { keyPath: 'id', autoIncrement: true });
                                hadithStore.createIndex('uuid', 'uuid', { unique: true });
                                hadithStore.createIndex('sourceBookKey', 'sourceBookKey', { unique: false });
                                hadithStore.createIndex('apiHadithNumber_bookKey', ['apiHadithNumber', 'sourceBookKey'], { unique: false });
                                hadithStore.createIndex('tags', 'tags', { multiEntry: true });
                                hadithStore.createIndex('bookmarked', 'bookmarked', { unique: false });
                                hadithStore.createIndex('createdAt', 'createdAt', { unique: false });
                                hadithStore.createIndex('sourceChapterNumber', 'sourceChapterNumber', { unique: false });
                            }
                            if (!dbInstance.objectStoreNames.contains(STORES.tags)) {
                                dbInstance.createObjectStore(STORES.tags, { keyPath: 'name' });
                            }
                            if (!dbInstance.objectStoreNames.contains(STORES.collections)) {
                                const collectionStore = dbInstance.createObjectStore(STORES.collections, { keyPath: 'id', autoIncrement: true });
                                collectionStore.createIndex('name', 'name', { unique: true });
                            }
                            if (!dbInstance.objectStoreNames.contains(STORES.chapterInfo)) {
                                dbInstance.createObjectStore(STORES.chapterInfo, { keyPath: 'bookKey' });
                            }
                            if (!dbInstance.objectStoreNames.contains(STORES.settings)) {
                                dbInstance.createObjectStore(STORES.settings, { keyPath: 'key' });
                            }
                        }
                        // if (oldVersion < 2) { // Example for future upgrades
                            // No specific schema changes for version 2 other than how info.json is handled,
                            // which doesn't require a new store if we use the 'settings' store.
                            // If we decided to make a dedicated store for info.json, it would go here.
                        // }
                    };

                    request.onsuccess = (event) => {
                        db = event.target.result;
                        resolve(db);
                    };

                    request.onerror = (event) => {
                        console.error("Database error: ", event.target.errorCode);
                        _showMessage("Error initializing database. Some features might not work.", "error", messageAreaGlobal, 0);
                        reject(event.target.errorCode);
                    };
                });
            }

            async function _getStore(storeName, mode = 'readonly') {
                if (!db) await _initDB(); 
                const transaction = db.transaction(storeName, mode);
                return transaction.objectStore(storeName);
            }
            
            async function _getAll(storeName) {
                const store = await _getStore(storeName);
                return new Promise((resolve, reject) => {
                    const request = store.getAll();
                    request.onsuccess = () => resolve(request.result);
                    request.onerror = (event) => reject(event.target.error);
                });
            }

            async function _getById(storeName, id) {
                const store = await _getStore(storeName);
                return new Promise((resolve, reject) => {
                    const request = store.get(id);
                    request.onsuccess = () => resolve(request.result);
                    request.onerror = (event) => reject(event.target.error);
                });
            }
            
            async function _getByIndex(storeName, indexName, value) {
                const store = await _getStore(storeName);
                const index = store.index(indexName);
                return new Promise((resolve, reject) => {
                    const request = index.get(value);
                    request.onsuccess = () => resolve(request.result);
                    request.onerror = (event) => reject(event.target.error);
                });
            }
            
            async function _getAllByIndex(storeName, indexName, value) {
                const store = await _getStore(storeName);
                const index = store.index(indexName);
                return new Promise((resolve, reject) => {
                    const request = index.getAll(value);
                    request.onsuccess = () => resolve(request.result);
                    request.onerror = (event) => reject(event.target.error);
                });
            }

            async function _add(storeName, item) {
                const store = await _getStore(storeName, 'readwrite');
                return new Promise((resolve, reject) => {
                    const request = store.add(item);
                    request.onsuccess = () => resolve(request.result); 
                    request.onerror = (event) => reject(event.target.error);
                });
            }

            async function _put(storeName, item) {
                const store = await _getStore(storeName, 'readwrite');
                return new Promise((resolve, reject) => {
                    const request = store.put(item);
                    request.onsuccess = () => resolve(request.result); 
                    request.onerror = (event) => reject(event.target.error);
                });
            }

            async function _delete(storeName, id) {
                const store = await _getStore(storeName, 'readwrite');
                return new Promise((resolve, reject) => {
                    const request = store.delete(id);
                    request.onsuccess = () => resolve();
                    request.onerror = (event) => reject(event.target.error);
                });
            }
            
            async function _clearStore(storeName) {
                const store = await _getStore(storeName, 'readwrite');
                return new Promise((resolve, reject) => {
                    const request = store.clear();
                    request.onsuccess = () => resolve();
                    request.onerror = (event) => reject(event.target.error);
                });
            }

            // --- Settings Manager ---
            const SettingsManager = (() => {
                const defaultSettings = {
                    theme: 'light',
                    itemsPerPage: 10
                };

                async function getSetting(key) {
                    try {
                        const setting = await _getById(STORES.settings, key);
                        return setting ? setting.value : defaultSettings[key];
                    } catch (error) {
                        console.error(`Error getting setting ${key}:`, error);
                        return defaultSettings[key];
                    }
                }

                async function setSetting(key, value) {
                    try {
                        await _put(STORES.settings, { key, value });
                        if (key === 'theme') {
                            document.documentElement.setAttribute('data-theme', value);
                        }
                        if (key === 'itemsPerPage') {
                            itemsPerPage = parseInt(value, 10);
                            if (views.allHadithView.classList.contains('active')) {
                                currentPage = 1; 
                                _renderAllHadith();
                            }
                        }
                    } catch (error) {
                        console.error(`Error setting ${key}:`, error);
                    }
                }

                async function loadSettings() {
                    const theme = await getSetting('theme');
                    document.documentElement.setAttribute('data-theme', theme);
                    themeSelector.value = theme;
                    
                    itemsPerPage = parseInt(await getSetting('itemsPerPage'), 10);
                    itemsPerPageSelector.value = itemsPerPage;
                }
                
                return { getSetting, setSetting, loadSettings };
            })();


            // --- Local Data Files Handling (editions.json, info.json) ---
            function _loadEditionsJSON() { 
                const editionsDataElement = document.getElementById('editionsData');
                if (editionsDataElement && editionsDataElement.textContent) {
                    try {
                        editionsJSON = JSON.parse(editionsDataElement.textContent);
                        _populateImportBookSelect();
                    } catch (e) {
                        console.error("Error parsing embedded editions.json:", e);
                        _disableImportFeatures("Critical error: Failed to load Hadith book definitions (editions.json). Import features disabled.");
                    }
                } else {
                     _disableImportFeatures("Critical error: Hadith book definitions (editions.json) not found. Import features disabled.");
                }
            }

            async function _loadLocalInfoJSON() {
                try {
                    const setting = await _getById(STORES.settings, LOCAL_INFO_JSON_DB_KEY);
                    if (setting && setting.value) {
                        localInfoJSONData = setting.value;
                        _showMessage("Loaded book information (info.json) from local database.", "info", importProgress);
                        return true;
                    }
                } catch (dbError) {
                     console.warn("Error reading info.json from DB, attempting to fetch fresh.", dbError);
                }

                // If not in DB or error reading, fetch from file
                try {
                    const response = await fetch(LOCAL_INFO_FILE);
                    if (!response.ok) {
                        throw new Error(`Failed to fetch ${LOCAL_INFO_FILE}: ${response.status} ${response.statusText}`);
                    }
                    const jsonData = await response.json();
                    localInfoJSONData = jsonData;
                    // Store in IndexedDB
                    await _put(STORES.settings, { key: LOCAL_INFO_JSON_DB_KEY, value: jsonData });
                    _showMessage(`Successfully loaded and stored book information from ${LOCAL_INFO_FILE}.`, "success", importProgress);
                    return true;
                } catch (fetchError) {
                    console.error(`Error loading ${LOCAL_INFO_FILE}:`, fetchError);
                    _disableImportFeatures(`Error loading ${LOCAL_INFO_FILE}: ${fetchError.message}. Import features might be limited or non-functional.`);
                    localInfoJSONData = null; 
                    return false;
                }
            }
            
            function _disableImportFeatures(message) {
                _showMessage(message, "error", importProgress, 0);
                importBookSelect.disabled = true;
                importArabicEditionSelect.disabled = true;
                importTranslationEditionSelect.disabled = true;
                startImportBtn.disabled = true;
                manageBookDataSelect.disabled = true;
                refreshChapterNamesBtn.disabled = true;
                addTranslationToBookEditionSelect.disabled = true;
                addAnotherTranslationBtn.disabled = true;
            }

            // --- UI Navigation & View Management ---
            function _initNavigation() {
                const navContainer = document.querySelector('nav ul');
                navContainer.addEventListener('click', (event) => {
                    if (event.target.tagName === 'BUTTON') {
                        const viewId = event.target.dataset.view;
                        _showView(viewId);
                        navContainer.querySelectorAll('button').forEach(btn => btn.classList.remove('active'));
                        event.target.classList.add('active');
                    }
                });
                document.querySelectorAll('.view').forEach(view => { views[view.id] = view; });
                const initialNavButton = navContainer.querySelector('button[data-view="allHadithView"]');
                if (initialNavButton) initialNavButton.classList.add('active');
            }

            function _showView(viewId) {
                for (const id in views) { views[id].classList.remove('active'); }
                if (views[viewId]) {
                    views[viewId].classList.add('active');
                    _loadViewData(viewId); 
                } else { console.warn(`View with id "${viewId}" not found.`); }
                window.scrollTo(0,0);
            }

            async function _loadViewData(viewId) {
                switch (viewId) {
                    case 'allHadithView':
                        await _populateFilterDropdowns();
                        await _renderAllHadith();
                        break;
                    case 'addHadithView':
                        _resetHadithForm();
                        await _populateTagsForHadithForm();
                        break;
                    case 'tagsView': await _renderTagsList(); break;
                    case 'collectionsView': await _renderCollectionsList(); break;
                    case 'importView':
                        if (!editionsJSON) _loadEditionsJSON(); 
                        if (!localInfoJSONData) await _loadLocalInfoJSON(); 
                        if (editionsJSON && localInfoJSONData) { 
                           _populateImportBookSelect(); 
                           await _populateManageBookDataSelect();
                        } else {
                            _disableImportFeatures("Required data files (editions.json or info.json) are missing or failed to load. Import features disabled.");
                        }
                        break;
                    case 'hadithOfTheDayView':
                        await _populateHotDTagFilter();
                        hadithOfTheDayCardContainer.innerHTML = '<p>Click the button to generate a Hadith of the Day.</p>';
                        break;
                }
            }
            
            function _openModal(modalId) { document.getElementById(modalId).style.display = "block"; }
            function _closeModal(modalId) { document.getElementById(modalId).style.display = "none"; }
            function _initModals() {
                document.querySelectorAll('.close-modal').forEach(s => { s.onclick = function() { _closeModal(this.closest('.modal').id); }});
                window.onclick = function(event) {
                    document.querySelectorAll('.modal').forEach(m => { if (event.target == m) _closeModal(m.id); });
                }
            }

            // --- Hadith Management (CRUD, Display) ---
            async function _saveHadith(event) {
                event.preventDefault();
                const id = hadithIdInput.value ? parseInt(hadithIdInput.value) : null;
                const uuid = hadithUuidInput.value || _uuidv4();
                
                const tagsArray = hadithTagsInput.value.split(',')
                    .map(tag => tag.trim().toLowerCase()).filter(tag => tag !== '');

                const hadithData = {
                    uuid: uuid,
                    arabicText: hadithArabicText.value,
                    translations: [{ 
                        editionName: hadithPrimaryTranslationEdition.value.trim() || 'Manual Entry',
                        language: hadithPrimaryTranslationLang.value.trim() || 'English',
                        text: hadithPrimaryTranslationText.value,
                        author: hadithPrimaryTranslationEdition.value.trim() || 'Manual Entry'
                    }],
                    primaryTranslationEditionName: hadithPrimaryTranslationEdition.value.trim() || 'Manual Entry',
                    sourceBookKey: (hadithSourceBook.value.trim().toLowerCase().replace(/\s+/g, '-')) || 'unknown',
                    sourceBookName: hadithSourceBook.value.trim(),
                    sourceChapterNumber: hadithSourceChapterNumber.value.trim(),
                    sourceChapterName: hadithSourceChapterName.value.trim(), 
                    sourceHadithNumberInBook: hadithSourceHadithNumber.value.trim(),
                    apiHadithNumber: null, 
                    grades: [], 
                    notes: hadithNotes.value.trim(),
                    tags: tagsArray,
                    bookmarked: hadithBookmarked.checked,
                    updatedAt: new Date().toISOString(),
                };

                try {
                    if (id) { 
                        hadithData.id = id;
                        const existingHadith = await _getById(STORES.hadiths, id);
                        if (existingHadith) { 
                            const newPrimary = hadithData.translations[0];
                            let foundPrimary = false;
                            hadithData.translations = existingHadith.translations.map(t => {
                                if (t.editionName === existingHadith.primaryTranslationEditionName || t.editionName === newPrimary.editionName) {
                                    foundPrimary = true;
                                    return newPrimary; 
                                }
                                return t;
                            });
                            if (!foundPrimary) { 
                                hadithData.translations.push(newPrimary);
                            }
                        }
                        await _put(STORES.hadiths, hadithData);
                         _showMessage('Hadith updated successfully!', 'success');
                    } else { 
                        hadithData.createdAt = new Date().toISOString();
                        await _add(STORES.hadiths, hadithData);
                        _showMessage('Hadith added successfully!', 'success');
                    }
                    for (const tagName of tagsArray) {
                        if (!await _getById(STORES.tags, tagName)) {
                            await _add(STORES.tags, { name: tagName, createdAt: new Date().toISOString() });
                        }
                    }
                    _resetHadithForm();
                    _showView('allHadithView'); 
                } catch (error) {
                    console.error("Error saving Hadith:", error);
                    _showMessage(`Error saving Hadith: ${error.message}`, 'error');
                }
            }

            function _resetHadithForm() {
                hadithForm.reset();
                hadithIdInput.value = '';
                hadithUuidInput.value = '';
                addEditHadithTitle.textContent = 'Add New Hadith';
                saveHadithBtn.textContent = 'Save Hadith';
                cancelEditHadithBtn.style.display = 'none';
                manageTranslationsSection.style.display = 'none';
                additionalTranslationsList.innerHTML = '';
                existingTagsForHadithForm.innerHTML = '';
            }

            async function _editHadith(hadithId) {
                try {
                    const hadith = await _getById(STORES.hadiths, hadithId);
                    if (!hadith) { _showMessage('Hadith not found.', 'error'); return; }
                    
                    _showView('addHadithView');
                    addEditHadithTitle.textContent = 'Edit Hadith';
                    saveHadithBtn.textContent = 'Update Hadith';
                    cancelEditHadithBtn.style.display = 'inline-block';

                    hadithIdInput.value = hadith.id;
                    hadithUuidInput.value = hadith.uuid;
                    hadithArabicText.value = hadith.arabicText || '';
                    
                    const primaryTranslation = hadith.translations.find(t => t.editionName === hadith.primaryTranslationEditionName) || hadith.translations[0];
                    if (primaryTranslation) {
                        hadithPrimaryTranslationText.value = primaryTranslation.text || '';
                        hadithPrimaryTranslationLang.value = primaryTranslation.language || 'English';
                        hadithPrimaryTranslationEdition.value = primaryTranslation.editionName || 'Manual Entry';
                    }

                    hadithSourceBook.value = hadith.sourceBookName || '';
                    hadithSourceChapterNumber.value = hadith.sourceChapterNumber || '';
                    
                    let chapName = hadith.sourceChapterName || '';
                    if (!chapName && hadith.sourceBookKey && hadith.sourceChapterNumber && localInfoJSONData && localInfoJSONData[hadith.sourceBookKey]) {
                        const bookInfo = localInfoJSONData[hadith.sourceBookKey];
                        if (bookInfo.metadata && bookInfo.metadata.sections && bookInfo.metadata.sections[String(hadith.sourceChapterNumber)]) {
                           chapName = bookInfo.metadata.sections[String(hadith.sourceChapterNumber)];
                        }
                    } else if (!chapName && hadith.sourceBookKey && hadith.sourceChapterNumber) { 
                        const chapInfoStore = await _getById(STORES.chapterInfo, hadith.sourceBookKey);
                        if (chapInfoStore && chapInfoStore.chapters && chapInfoStore.chapters[hadith.sourceChapterNumber]) {
                            chapName = chapInfoStore.chapters[hadith.sourceChapterNumber];
                        }
                    }
                    hadithSourceChapterName.value = chapName;


                    hadithSourceHadithNumber.value = hadith.sourceHadithNumberInBook || '';
                    hadithNotes.value = hadith.notes || '';
                    hadithTagsInput.value = (hadith.tags || []).join(', ');
                    hadithBookmarked.checked = hadith.bookmarked || false;

                    await _populateTagsForHadithForm(hadith.tags || []);
                    _renderAdditionalTranslations(hadith);
                    manageTranslationsSection.style.display = 'block';

                } catch (error) {
                    console.error("Error loading Hadith for editing:", error);
                    _showMessage('Error loading Hadith for editing.', 'error');
                }
            }
            
            async function _populateTagsForHadithForm(currentHadithTags = []) {
                existingTagsForHadithForm.innerHTML = '';
                const allTags = await _getAll(STORES.tags);
                if (allTags.length > 0) {
                    const p = document.createElement('p');
                    p.innerHTML = '<strong>Available tags (click to add):</strong> ';
                    allTags.forEach(tagObj => {
                        const span = document.createElement('span');
                        span.textContent = tagObj.name;
                        span.className = 'tag';
                        span.style.cursor = 'pointer';
                        span.style.backgroundColor = currentHadithTags.includes(tagObj.name) ? 'var(--primary-color)' : 'var(--secondary-color)';
                        span.onclick = () => {
                            let currentTags = hadithTagsInput.value.split(',').map(t => t.trim().toLowerCase()).filter(t => t);
                            if (currentTags.includes(tagObj.name)) {
                                currentTags = currentTags.filter(t => t !== tagObj.name);
                                span.style.backgroundColor = 'var(--secondary-color)';
                            } else {
                                currentTags.push(tagObj.name);
                                span.style.backgroundColor = 'var(--primary-color)';
                            }
                            hadithTagsInput.value = currentTags.join(', ');
                        };
                        p.appendChild(span);
                        p.appendChild(document.createTextNode(' ')); 
                    });
                    existingTagsForHadithForm.appendChild(p);
                }
            }


            async function _deleteHadith(hadithId, hadithUuid) {
                if (!confirm('Are you sure you want to delete this Hadith? This action cannot be undone.')) return;
                try {
                    await _delete(STORES.hadiths, hadithId);
                    const collections = await _getAll(STORES.collections);
                    for (const coll of collections) {
                        if (coll.hadith_uuids && coll.hadith_uuids.includes(hadithUuid)) {
                            coll.hadith_uuids = coll.hadith_uuids.filter(uuid => uuid !== hadithUuid);
                            await _put(STORES.collections, coll);
                        }
                    }
                    _showMessage('Hadith deleted successfully.', 'success');
                    _renderAllHadith(); 
                } catch (error) {
                    console.error("Error deleting Hadith:", error);
                    _showMessage('Error deleting Hadith.', 'error');
                }
            }
            
            async function _toggleBookmark(hadithId, buttonElement) {
                try {
                    const hadith = await _getById(STORES.hadiths, hadithId);
                    if (hadith) {
                        hadith.bookmarked = !hadith.bookmarked;
                        hadith.updatedAt = new Date().toISOString();
                        await _put(STORES.hadiths, hadith);
                        buttonElement.textContent = hadith.bookmarked ? 'Unbookmark' : 'Bookmark';
                        buttonElement.classList.toggle('bookmarked', hadith.bookmarked);
                    }
                } catch (error) {
                    console.error("Error toggling bookmark:", error);
                    _showMessage('Error updating bookmark.', 'error');
                }
            }

            async function _renderHadithCard(hadith, container = hadithListContainer, isHotD = false) {
                const card = document.createElement('div');
                card.className = 'hadith-card';
                card.dataset.hadithId = hadith.id;
                card.dataset.hadithUuid = hadith.uuid;

                let arabicHtml = hadith.arabicText ? `<div class="hadith-arabic">${hadith.arabicText}</div>` : '';
                let translationHtml = '';
                const primaryTranslation = hadith.translations.find(t => t.editionName === hadith.primaryTranslationEditionName) || hadith.translations[0];
                if (primaryTranslation) {
                    translationHtml = `<div class="hadith-translation" id="translationText-${hadith.uuid}">${primaryTranslation.text}</div>`;
                }

                let translationSelectorHtml = '';
                if (hadith.translations && hadith.translations.length > 1) {
                    translationSelectorHtml = `<div class="hadith-translation-selector form-group"><label for="transSelector-${hadith.uuid}">View Translation:</label><select id="transSelector-${hadith.uuid}">`;
                    hadith.translations.forEach(t => {
                        translationSelectorHtml += `<option value="${t.editionName}" ${t.editionName === hadith.primaryTranslationEditionName ? 'selected' : ''}>${t.language} - ${t.author || t.editionName}</option>`;
                    });
                    translationSelectorHtml += `</select></div>`;
                }
                
                let chapterName = hadith.sourceChapterName || '';
                if (!chapterName && hadith.sourceBookKey && hadith.sourceChapterNumber) { 
                    const chapInfo = await _getById(STORES.chapterInfo, hadith.sourceBookKey);
                    if (chapInfo && chapInfo.chapters && chapInfo.chapters[String(hadith.sourceChapterNumber)]) {
                        chapterName = chapInfo.chapters[String(hadith.sourceChapterNumber)];
                    }
                }
                const chapterDisplay = chapterName ? `Ch. ${hadith.sourceChapterNumber}: ${chapterName}` : `Ch. ${hadith.sourceChapterNumber || 'N/A'}`;

                let tagsDisplayHtml = (hadith.tags && hadith.tags.length > 0) ? `<div class="hadith-tags-display"><strong>Tags:</strong> ${hadith.tags.map(t => `<span class="tag">${t}</span>`).join(' ')}</div>` : '';
                let notesDisplayHtml = hadith.notes ? `<div class="hadith-notes"><strong>Notes:</strong> ${hadith.notes.replace(/\n/g, '<br>')}</div>` : '';
                let gradesDisplayHtml = (hadith.grades && hadith.grades.length > 0) ? `<div class="hadith-grades"><strong>Grades:</strong> ${hadith.grades.map(g => `<span class="grade-item">${g.name}: ${g.grade}</span>`).join(' ')}</div>` : '';


                card.innerHTML = `
                    ${arabicHtml}
                    ${translationSelectorHtml}
                    ${translationHtml}
                    <div class="hadith-source"><strong>Source:</strong> ${hadith.sourceBookName || 'N/A'}, Hadith #: ${hadith.sourceHadithNumberInBook || hadith.apiHadithNumber || 'N/A'}</div>
                    <div class="hadith-chapter"><strong>Chapter:</strong> ${chapterDisplay}</div>
                    ${gradesDisplayHtml}
                    ${tagsDisplayHtml}
                    ${notesDisplayHtml}
                    ${ isHotD ? '' : `
                    <div class="hadith-actions">
                        <button class="edit-hadith-btn">Edit</button>
                        <button class="delete-hadith-btn">Delete</button>
                        <button class="bookmark-hadith-btn ${hadith.bookmarked ? 'bookmarked' : ''}">${hadith.bookmarked ? 'Unbookmark' : 'Bookmark'}</button>
                    </div>`}
                `;
                
                if (isHotD) { 
                    container.innerHTML = ''; 
                    container.appendChild(card);
                } else {
                    container.appendChild(card);
                }

                if (!isHotD) {
                    card.querySelector('.edit-hadith-btn').addEventListener('click', () => _editHadith(hadith.id));
                    card.querySelector('.delete-hadith-btn').addEventListener('click', () => _deleteHadith(hadith.id, hadith.uuid));
                    card.querySelector('.bookmark-hadith-btn').addEventListener('click', (e) => _toggleBookmark(hadith.id, e.target));
                }
                
                const transSelector = card.querySelector(`#transSelector-${hadith.uuid}`);
                if (transSelector) {
                    transSelector.addEventListener('change', (e) => {
                        const selectedEditionName = e.target.value;
                        const newTranslation = hadith.translations.find(t => t.editionName === selectedEditionName);
                        if (newTranslation) {
                            card.querySelector(`#translationText-${hadith.uuid}`).innerHTML = newTranslation.text;
                        }
                    });
                }
            }

            async function _renderAllHadith() {
                _showLoading(hadithListContainer);
                try {
                    let allHadiths = await _getAll(STORES.hadiths);
                    
                    if (currentFilters.keyword) {
                        const keyword = currentFilters.keyword.toLowerCase();
                        allHadiths = allHadiths.filter(h => 
                            (h.arabicText && h.arabicText.toLowerCase().includes(keyword)) ||
                            (h.translations && h.translations.some(t => t.text.toLowerCase().includes(keyword))) ||
                            (h.notes && h.notes.toLowerCase().includes(keyword))
                        );
                    }
                    if (currentFilters.bookKey) {
                        allHadiths = allHadiths.filter(h => h.sourceBookKey === currentFilters.bookKey);
                    }
                    if (currentFilters.bookKey && currentFilters.chapterNumber) { 
                        allHadiths = allHadiths.filter(h => String(h.sourceChapterNumber) === String(currentFilters.chapterNumber));
                    }
                    if (currentFilters.tag) {
                        allHadiths = allHadiths.filter(h => h.tags && h.tags.includes(currentFilters.tag));
                    }
                    if (currentFilters.bookmarkStatus === 'bookmarked') {
                        allHadiths = allHadiths.filter(h => h.bookmarked);
                    } else if (currentFilters.bookmarkStatus === 'not_bookmarked') {
                        allHadiths = allHadiths.filter(h => !h.bookmarked);
                    }

                    allHadiths.sort((a, b) => new Date(b.createdAt || 0) - new Date(a.createdAt || 0)); 

                    _clearLoading(hadithListContainer);
                    hadithListContainer.innerHTML = ''; 

                    const totalItemsInDb = (await _getAll(STORES.hadiths)).length; 
                    const filteredItemsCount = allHadiths.length;

                    if (filteredItemsCount === 0) {
                        hadithListContainer.innerHTML = '<p>No Hadith found matching your criteria. Try adding some or adjusting filters.</p>';
                        _renderPagination(totalItemsInDb, 0);
                        return;
                    }
                    
                    const paginatedHadiths = allHadiths.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage);

                    for (const hadith of paginatedHadiths) {
                       await _renderHadithCard(hadith); 
                    }
                    _renderPagination(totalItemsInDb, filteredItemsCount);

                } catch (error) {
                    console.error("Error rendering Hadith list:", error);
                    _clearLoading(hadithListContainer);
                    hadithListContainer.innerHTML = '<p>Error loading Hadith. Please try again.</p>';
                }
            }
            
            function _renderPagination(totalItemsInDb, filteredItemsCount) {
                paginationControls.innerHTML = '';
                const totalPages = Math.ceil(filteredItemsCount / itemsPerPage);

                if (totalPages <= 1 && filteredItemsCount === totalItemsInDb) { 
                     const summarySimple = document.createElement('p');
                     summarySimple.textContent = `Total Hadith in DB: ${totalItemsInDb}`;
                     summarySimple.style.fontSize = '0.9em';
                     paginationControls.appendChild(summarySimple);
                     return;
                }
                if (totalPages <=1 && filteredItemsCount < totalItemsInDb) { 
                    // Fall through
                } else if (totalPages <= 1) { 
                    const summarySimple = document.createElement('p');
                    summarySimple.textContent = `Showing ${filteredItemsCount} Hadith (Total in DB: ${totalItemsInDb})`;
                    summarySimple.style.fontSize = '0.9em';
                    paginationControls.appendChild(summarySimple);
                    return;
                }


                const prevButton = document.createElement('button');
                prevButton.textContent = 'Previous';
                prevButton.disabled = currentPage === 1;
                prevButton.addEventListener('click', () => {
                    if (currentPage > 1) { currentPage--; _renderAllHadith(); }
                });
                paginationControls.appendChild(prevButton);

                const pageInfo = document.createElement('span');
                pageInfo.textContent = ` Page ${currentPage} of ${totalPages} `;
                pageInfo.style.margin = "0 10px";
                paginationControls.appendChild(pageInfo);

                const nextButton = document.createElement('button');
                nextButton.textContent = 'Next';
                nextButton.disabled = currentPage === totalPages;
                nextButton.addEventListener('click', () => {
                    if (currentPage < totalPages) { currentPage++; _renderAllHadith(); }
                });
                paginationControls.appendChild(nextButton);
                
                const summary = document.createElement('p');
                summary.textContent = `Showing ${filteredItemsCount} Hadith (Total in DB: ${totalItemsInDb})`;
                summary.style.fontSize = '0.9em';
                summary.style.marginTop = '10px';
                paginationControls.appendChild(summary);
            }

            async function _populateFilterDropdowns() {
                const hadiths = await _getAll(STORES.hadiths);
                const uniqueBooks = [...new Set(hadiths.map(h => JSON.stringify({key: h.sourceBookKey, name: h.sourceBookName})))].map(s => JSON.parse(s));
                
                filterBook.innerHTML = '<option value="">All Books</option>';
                uniqueBooks.sort((a,b) => a.name.localeCompare(b.name)).forEach(book => {
                    const option = document.createElement('option');
                    option.value = book.key;
                    option.textContent = book.name;
                    filterBook.appendChild(option);
                });
                filterBook.value = currentFilters.bookKey || "";

                const tags = await _getAll(STORES.tags);
                filterTag.innerHTML = '<option value="">All Tags</option>';
                tags.sort((a,b) => a.name.localeCompare(b.name)).forEach(tag => {
                    const option = document.createElement('option');
                    option.value = tag.name;
                    option.textContent = tag.name;
                    filterTag.appendChild(option);
                });
                filterTag.value = currentFilters.tag || "";
                
                _updateChapterFilter();
            }
            
            async function _updateChapterFilter() {
                const selectedBookKey = filterBook.value;
                filterChapter.innerHTML = '<option value="">All Chapters</option>';
                filterChapter.disabled = !selectedBookKey;

                if (selectedBookKey) {
                    const chapInfo = await _getById(STORES.chapterInfo, selectedBookKey);
                    if (chapInfo && chapInfo.chapters) {
                        Object.entries(chapInfo.chapters)
                            .sort(([,aName], [,bName]) => String(aName).localeCompare(String(bName))) 
                            .forEach(([num, name]) => {
                                if (name && num !== "0") { 
                                    const option = document.createElement('option');
                                    option.value = num;
                                    option.textContent = `${num}: ${name}`;
                                    filterChapter.appendChild(option);
                                }
                        });
                    } else { 
                        const hadithsOfBook = await _getAllByIndex(STORES.hadiths, 'sourceBookKey', selectedBookKey);
                        const uniqueChapters = [...new Set(hadithsOfBook.map(h => h.sourceChapterNumber).filter(Boolean))];
                        uniqueChapters.sort((a,b) => String(a).localeCompare(String(b), undefined, {numeric: true})).forEach(chapNum => {
                             const option = document.createElement('option');
                             option.value = chapNum;
                             option.textContent = `Chapter ${chapNum}`;
                             filterChapter.appendChild(option);
                        });
                    }
                }
                filterChapter.value = currentFilters.chapterNumber || "";
            }

            function _applyFilters() {
                currentFilters = {
                    keyword: filterKeyword.value.trim(),
                    bookKey: filterBook.value,
                    chapterNumber: filterChapter.value,
                    tag: filterTag.value,
                    bookmarkStatus: filterBookmark.value
                };
                currentPage = 1; 
                _renderAllHadith();
            }

            function _resetFilters() {
                filterKeyword.value = '';
                filterBook.value = '';
                filterChapter.innerHTML = '<option value="">All Chapters</option>';
                filterChapter.disabled = true;
                filterTag.value = '';
                filterBookmark.value = '';
                currentFilters = {};
                currentPage = 1;
                _renderAllHadith();
            }
            
            // --- Additional Translations Management ---
            function _renderAdditionalTranslations(hadith) {
                additionalTranslationsList.innerHTML = '';
                if (!hadith || !hadith.translations || hadith.translations.length === 0) {
                    additionalTranslationsList.innerHTML = '<p>No additional translations available.</p>';
                    return;
                }

                hadith.translations.forEach((trans, index) => {
                    const isPrimary = trans.editionName === hadith.primaryTranslationEditionName;
                    const item = document.createElement('div');
                    item.className = 'translation-item';
                    item.style.border = '1px solid var(--border-color)'; item.style.padding = '10px';
                    item.style.marginBottom = '10px'; item.style.borderRadius = '4px';
                    
                    item.innerHTML = `
                        <p><strong>${trans.language} - ${trans.author || trans.editionName}</strong> ${isPrimary ? '<span style="color:green; font-weight:bold;">(Primary)</span>' : ''}</p>
                        <p>${trans.text.substring(0,100)}...</p>
                        ${!isPrimary ? `<button data-index="${index}" class="set-primary-trans-btn">Set as Primary</button> <button data-index="${index}" class="delete-trans-btn">Delete</button>` : ''}
                    `;
                    additionalTranslationsList.appendChild(item);
                });

                additionalTranslationsList.querySelectorAll('.set-primary-trans-btn').forEach(btn => {
                    btn.addEventListener('click', async (e) => {
                        await _setPrimaryTranslation(hadith.id, parseInt(e.target.dataset.index));
                    });
                });
                additionalTranslationsList.querySelectorAll('.delete-trans-btn').forEach(btn => {
                    btn.addEventListener('click', async (e) => {
                        await _deleteTranslation(hadith.id, parseInt(e.target.dataset.index));
                    });
                });
            }

            async function _handleAddTranslation(event) {
                event.preventDefault();
                const hadithId = parseInt(hadithIdInput.value);
                if (!hadithId) { _showMessage("Please save the Hadith first.", "error"); return; }

                const newTrans = {
                    text: document.getElementById('newTranslationText').value,
                    language: document.getElementById('newTranslationLang').value,
                    editionName: document.getElementById('newTranslationEdition').value,
                    author: document.getElementById('newTranslationEdition').value, 
                };
                if (!newTrans.text || !newTrans.language || !newTrans.editionName) {
                    _showMessage("All translation fields are required.", "error"); return;
                }
                try {
                    const hadith = await _getById(STORES.hadiths, hadithId);
                    if (hadith) {
                        if (hadith.translations.some(t => t.editionName === newTrans.editionName)) {
                            _showMessage(`Translation "${newTrans.editionName}" already exists.`, "error"); return;
                        }
                        hadith.translations.push(newTrans);
                        hadith.updatedAt = new Date().toISOString();
                        await _put(STORES.hadiths, hadith);
                        _showMessage("Translation added.", "success");
                        addTranslationForm.reset();
                        _renderAdditionalTranslations(hadith); 
                    }
                } catch (error) { console.error("Error adding translation:", error); _showMessage("Error adding translation.", "error"); }
            }

            async function _setPrimaryTranslation(hadithId, translationIndex) {
                 try {
                    const hadith = await _getById(STORES.hadiths, hadithId);
                    if (hadith && hadith.translations[translationIndex]) {
                        hadith.primaryTranslationEditionName = hadith.translations[translationIndex].editionName;
                        hadith.updatedAt = new Date().toISOString();
                        await _put(STORES.hadiths, hadith);
                        _showMessage("Primary translation updated.", "success");
                        if (parseInt(hadithIdInput.value) === hadithId) { 
                            const primaryT = hadith.translations[translationIndex];
                            hadithPrimaryTranslationText.value = primaryT.text;
                            hadithPrimaryTranslationLang.value = primaryT.language;
                            hadithPrimaryTranslationEdition.value = primaryT.editionName;
                        }
                        _renderAdditionalTranslations(hadith);
                    }
                } catch (e) { console.error(e); _showMessage("Error setting primary.", "error"); }
            }
            
            async function _deleteTranslation(hadithId, translationIndex) {
                if (!confirm("Delete this translation?")) return;
                try {
                    const hadith = await _getById(STORES.hadiths, hadithId);
                    if (hadith && hadith.translations[translationIndex]) {
                        if (hadith.translations[translationIndex].editionName === hadith.primaryTranslationEditionName) {
                            _showMessage("Cannot delete primary. Set another first.", "error"); return;
                        }
                        hadith.translations.splice(translationIndex, 1);
                        hadith.updatedAt = new Date().toISOString();
                        await _put(STORES.hadiths, hadith);
                        _showMessage("Translation deleted.", "success");
                        _renderAdditionalTranslations(hadith);
                    }
                } catch (e) { console.error(e); _showMessage("Error deleting translation.", "error"); }
            }


            // --- Tag Management ---
            async function _addTag() {
                const tagName = newTagNameInput.value.trim().toLowerCase();
                const msgArea = document.getElementById('tagsView').querySelector('.message-area') || messageAreaGlobal;
                if (!tagName) { _showMessage('Tag name cannot be empty.', 'error', msgArea); return; }
                try {
                    if (await _getById(STORES.tags, tagName)) {
                        _showMessage(`Tag "${tagName}" already exists.`, 'error', msgArea); return;
                    }
                    await _add(STORES.tags, { name: tagName, createdAt: new Date().toISOString() });
                    _showMessage(`Tag "${tagName}" added.`, 'success', msgArea);
                    newTagNameInput.value = '';
                    _renderTagsList(); _populateFilterDropdowns(); _populateHotDTagFilter();
                } catch (e) { console.error(e); _showMessage(`Error: ${e.message}`, 'error', msgArea); }
            }

            async function _renderTagsList() {
                _showLoading(tagsListContainer);
                try {
                    const tags = await _getAll(STORES.tags);
                    _clearLoading(tagsListContainer); tagsListContainer.innerHTML = '';
                    if (tags.length === 0) { tagsListContainer.innerHTML = '<p>No tags created.</p>'; return; }
                    tags.sort((a,b) => a.name.localeCompare(b.name)).forEach(tag => {
                        const item = document.createElement('div'); item.className = 'tag-item';
                        item.innerHTML = `<span>${tag.name}</span><div>
                                <button data-name="${tag.name}" class="edit-tag-btn">Edit</button>
                                <button data-name="${tag.name}" class="delete-tag-btn">Delete</button></div>`;
                        tagsListContainer.appendChild(item);
                    });
                } catch (e) { console.error(e); _clearLoading(tagsListContainer); tagsListContainer.innerHTML = '<p>Error loading tags.</p>';}
            }
            
            function _openEditTagModal(tagName) {
                editingOldTagNameInput.value = tagName; editingNewTagNameInput.value = tagName;
                _openModal('editTagModal');
            }

            async function _saveEditedTag() {
                const oldName = editingOldTagNameInput.value;
                const newName = editingNewTagNameInput.value.trim().toLowerCase();
                const msgArea = editTagModal.querySelector('.message-area') || messageAreaGlobal;
                if (!newName) { _showMessage("New tag name empty.", "error", msgArea); return; }
                if (oldName === newName) { _closeModal('editTagModal'); return; }
                try {
                    if (await _getById(STORES.tags, newName)) {
                         _showMessage(`Tag "${newName}" already exists.`, "error", msgArea); return;
                    }
                    const oldTagObject = await _getById(STORES.tags, oldName);
                    if (!oldTagObject) {
                         _showMessage(`Original tag "${oldName}" not found.`, "error", msgArea);
                        _closeModal('editTagModal'); _renderTagsList(); return;
                    }
                    await _add(STORES.tags, { name: newName, createdAt: oldTagObject.createdAt });
                    const hadithsToUpdate = await _getAllByIndex(STORES.hadiths, 'tags', oldName);
                    for (const hadith of hadithsToUpdate) {
                        hadith.tags = hadith.tags.map(t => t === oldName ? newName : t);
                        hadith.updatedAt = new Date().toISOString();
                        await _put(STORES.hadiths, hadith);
                    }
                    await _delete(STORES.tags, oldName);
                    _showMessage(`Tag "${oldName}" updated to "${newName}".`, "success");
                    _closeModal('editTagModal'); _renderTagsList(); _populateFilterDropdowns(); _populateHotDTagFilter();
                } catch (e) { console.error(e); _showMessage(`Error: ${e.message}`, "error", msgArea); }
            }

            async function _deleteTag(tagName) {
                if (!confirm(`Delete tag "${tagName}"? It will be removed from all Hadith.`)) return;
                try {
                    const hadithsWithTag = await _getAllByIndex(STORES.hadiths, 'tags', tagName);
                    for (const hadith of hadithsWithTag) {
                        hadith.tags = hadith.tags.filter(t => t !== tagName);
                        hadith.updatedAt = new Date().toISOString();
                        await _put(STORES.hadiths, hadith);
                    }
                    await _delete(STORES.tags, tagName);
                    _showMessage(`Tag "${tagName}" deleted.`, 'success');
                    _renderTagsList(); _populateFilterDropdowns(); _populateHotDTagFilter();
                } catch (e) { console.error(e); _showMessage(`Error: ${e.message}`, 'error'); }
            }

            // --- Collection Management ---
            async function _addCollection() {
                const name = newCollectionNameInput.value.trim();
                const description = newCollectionDescInput.value.trim();
                const msgArea = document.getElementById('collectionsView').querySelector('.message-area') || messageAreaGlobal;
                if (!name) { _showMessage('Collection name empty.', 'error', msgArea); return; }
                try {
                    const collections = await _getAll(STORES.collections);
                    if (collections.some(c => c.name.toLowerCase() === name.toLowerCase())) {
                         _showMessage(`Collection "${name}" exists.`, 'error', msgArea); return;
                    }
                    await _add(STORES.collections, { name, description, hadith_uuids: [], createdAt: new Date().toISOString(), updatedAt: new Date().toISOString() });
                    _showMessage(`Collection "${name}" added.`, 'success', msgArea);
                    newCollectionNameInput.value = ''; newCollectionDescInput.value = '';
                    _renderCollectionsList();
                } catch (e) { console.error(e); _showMessage(`Error: ${e.message}`, 'error', msgArea); }
            }

            async function _renderCollectionsList() {
                _showLoading(collectionsListContainer);
                try {
                    const collections = await _getAll(STORES.collections);
                    _clearLoading(collectionsListContainer); collectionsListContainer.innerHTML = '';
                    if (collections.length === 0) { collectionsListContainer.innerHTML = '<p>No collections created.</p>'; return; }
                    collections.sort((a,b) => a.name.localeCompare(b.name)).forEach(collection => {
                        const item = document.createElement('div'); item.className = 'collection-item';
                        item.innerHTML = `<div><strong>${collection.name}</strong>
                                <small>(${(collection.hadith_uuids || []).length} Hadith)</small><br>
                                <small>${collection.description || 'No description'}</small></div>
                            <div><button data-id="${collection.id}" class="view-collection-btn">View/Manage</button>
                                <button data-id="${collection.id}" class="edit-collection-btn">Edit</button>
                                <button data-id="${collection.id}" class="delete-collection-btn">Delete</button></div>`;
                        collectionsListContainer.appendChild(item);
                    });
                } catch (e) { console.error(e); _clearLoading(collectionsListContainer); collectionsListContainer.innerHTML = '<p>Error loading collections.</p>';}
            }
            
            async function _openCollectionViewModal(collectionId) {
                currentEditingCollectionId = collectionId;
                try {
                    const collection = await _getById(STORES.collections, collectionId);
                    if (!collection) { _showMessage("Collection not found.", "error"); return; }
                    collectionDetailName.textContent = collection.name;
                    collectionDetailDesc.textContent = collection.description || "No description.";
                    collectionDetailHadithList.innerHTML = '';
                    if (collection.hadith_uuids && collection.hadith_uuids.length > 0) {
                        for (const uuid of collection.hadith_uuids) {
                            const hadith = await _getByIndex(STORES.hadiths, 'uuid', uuid);
                            if (hadith) {
                                const li = document.createElement('li');
                                li.style.cssText = 'display:flex; justify-content:space-between; padding:5px 0; border-bottom:1px dashed var(--border-color);';
                                const hadithDesc = `${hadith.sourceBookName}: ${hadith.sourceHadithNumberInBook || hadith.apiHadithNumber || 'ID ' + hadith.id} - ${(hadith.translations[0].text || '').substring(0,50)}...`;
                                li.innerHTML = `<span>${hadithDesc}</span> <button data-uuid="${uuid}" class="remove-hadith-from-coll-btn" style="font-size:0.8em; padding: 2px 5px;">Remove</button>`;
                                collectionDetailHadithList.appendChild(li);
                            }
                        }
                    } else { collectionDetailHadithList.innerHTML = "<p>No Hadith in this collection.</p>"; }
                    
                    const allHadiths = await _getAll(STORES.hadiths);
                    addHadithToCollectionSelect.innerHTML = '';
                    allHadiths.filter(h => !(collection.hadith_uuids && collection.hadith_uuids.includes(h.uuid))) 
                        .forEach(h => {
                            const option = document.createElement('option'); option.value = h.uuid;
                            option.textContent = `${h.sourceBookName}: ${h.sourceHadithNumberInBook || h.apiHadithNumber || 'ID ' + h.id} - ${(h.translations[0].text || '').substring(0,70)}...`;
                            addHadithToCollectionSelect.appendChild(option);
                    });
                    _openModal('collectionDetailModal');
                } catch (e) { console.error(e); _showMessage("Error loading collection.", "error"); }
            }
            
            async function _saveHadithToCollection() {
                if (!currentEditingCollectionId) return;
                const msgArea = collectionDetailModal.querySelector('.message-area') || messageAreaGlobal;
                const selectedHadithUUIDs = Array.from(addHadithToCollectionSelect.selectedOptions).map(opt => opt.value);
                if (selectedHadithUUIDs.length === 0) { _showMessage("No Hadith selected.", "info", msgArea); return; }
                try {
                    const collection = await _getById(STORES.collections, currentEditingCollectionId);
                    if (collection) {
                        collection.hadith_uuids = [...new Set([...(collection.hadith_uuids || []), ...selectedHadithUUIDs])];
                        collection.updatedAt = new Date().toISOString();
                        await _put(STORES.collections, collection);
                        _showMessage("Hadith added.", "success", msgArea);
                        _openCollectionViewModal(currentEditingCollectionId); 
                        _renderCollectionsList(); 
                    }
                } catch (e) { console.error(e); _showMessage("Error adding Hadith.", "error", msgArea); }
            }

            async function _removeHadithFromCollection(hadithUuid) {
                 if (!currentEditingCollectionId || !hadithUuid) return;
                 if (!confirm("Remove Hadith from collection?")) return;
                 const msgArea = collectionDetailModal.querySelector('.message-area') || messageAreaGlobal;
                 try {
                    const collection = await _getById(STORES.collections, currentEditingCollectionId);
                    if (collection && collection.hadith_uuids) {
                        collection.hadith_uuids = collection.hadith_uuids.filter(uuid => uuid !== hadithUuid);
                        collection.updatedAt = new Date().toISOString();
                        await _put(STORES.collections, collection);
                        _showMessage("Hadith removed.", "success", msgArea);
                        _openCollectionViewModal(currentEditingCollectionId); 
                        _renderCollectionsList(); 
                    }
                 } catch (e) { console.error(e); _showMessage("Error removing Hadith.", "error", msgArea); }
            }
            
            function _openEditCollectionModal(collectionId) {
                _getById(STORES.collections, collectionId).then(c => {
                    if (c) {
                        editingCollectionIdInput.value = c.id; editingCollectionNameInput.value = c.name;
                        editingCollectionDescInput.value = c.description || ''; _openModal('editCollectionModal');
                    } else { _showMessage("Collection not found.", "error"); }
                }).catch(err => _showMessage("Error loading collection.", "error"));
            }

            async function _saveEditedCollection() {
                const id = parseInt(editingCollectionIdInput.value);
                const name = editingCollectionNameInput.value.trim();
                const description = editingCollectionDescInput.value.trim();
                const msgArea = editCollectionModal.querySelector('.message-area') || messageAreaGlobal;
                if (!name) { _showMessage("Name empty.", "error", msgArea); return; }
                try {
                    const collection = await _getById(STORES.collections, id);
                    if (!collection) { _showMessage("Collection not found.", "error", msgArea); return; }
                    if (name.toLowerCase() !== collection.name.toLowerCase()) {
                        const collections = await _getAll(STORES.collections);
                        if (collections.some(c => c.id !== id && c.name.toLowerCase() === name.toLowerCase())) {
                             _showMessage(`Collection "${name}" exists.`, "error", msgArea); return;
                        }
                    }
                    collection.name = name; collection.description = description; collection.updatedAt = new Date().toISOString();
                    await _put(STORES.collections, collection);
                    _showMessage("Collection updated.", "success");
                    _closeModal('editCollectionModal'); _renderCollectionsList();
                } catch (e) { console.error(e); _showMessage("Error saving.", "error", msgArea); }
            }

            async function _deleteCollection(collectionId) {
                if (!confirm('Delete collection? Hadith remain.')) return;
                try {
                    await _delete(STORES.collections, collectionId);
                    _showMessage('Collection deleted.', 'success'); _renderCollectionsList();
                } catch (e) { console.error(e); _showMessage('Error deleting.', 'error'); }
            }


            // --- Import Hadith from Local Files ---
            function _populateImportBookSelect() {
                if (!editionsJSON) return;
                importBookSelect.innerHTML = '<option value="">-- Select a Book --</option>';
                Object.keys(editionsJSON).sort((a,b) => editionsJSON[a].name.localeCompare(editionsJSON[b].name)).forEach(bookKey => {
                    const option = document.createElement('option');
                    option.value = bookKey;
                    option.textContent = editionsJSON[bookKey].name;
                    importBookSelect.appendChild(option);
                });
                if(importBookSelect.value) _populateEditionSelects();
            }

            function _populateEditionSelects() {
                const selectedBookKey = importBookSelect.value;
                importArabicEditionSelect.innerHTML = '<option value="">-- Select Arabic Edition --</option>';
                importTranslationEditionSelect.innerHTML = '<option value="">-- Select Translation --</option>';
                
                if (selectedBookKey && editionsJSON[selectedBookKey]) {
                    const bookEditions = editionsJSON[selectedBookKey].collection;
                    bookEditions.forEach(edition => {
                        const option = document.createElement('option');
                        option.value = edition.name; 
                        option.textContent = `${edition.language}: ${edition.name} (${edition.author})`;
                        
                        if (edition.language.toLowerCase() === 'arabic') {
                            importArabicEditionSelect.appendChild(option.cloneNode(true));
                        } else {
                            importTranslationEditionSelect.appendChild(option.cloneNode(true));
                        }
                    });
                }
            }
            
            async function _populateManageBookDataSelect() {
                const importedBooksInfo = await _getAll(STORES.chapterInfo); 
                manageBookDataSelect.innerHTML = '<option value="">-- Select Imported Book --</option>';
                addTranslationToBookEditionSelect.innerHTML = '<option value="">-- Select Edition --</option>';

                const importRelatedButtons = [refreshChapterNamesBtn, addAnotherTranslationBtn];
                if (importedBooksInfo.length === 0) {
                    manageBookDataSelect.disabled = true;
                    importRelatedButtons.forEach(btn => btn.disabled = true);
                    return;
                }
                
                manageBookDataSelect.disabled = false;
                importRelatedButtons.forEach(btn => btn.disabled = false);

                importedBooksInfo.sort((a,b) => a.name.localeCompare(b.name)).forEach(bookInfo => {
                    const option = document.createElement('option');
                    option.value = bookInfo.bookKey;
                    option.textContent = bookInfo.name;
                    manageBookDataSelect.appendChild(option);
                });
                
                manageBookDataSelect.onchange = () => {
                    const selectedBookKey = manageBookDataSelect.value;
                    addTranslationToBookEditionSelect.innerHTML = '<option value="">-- Select Edition --</option>';
                    if (selectedBookKey && editionsJSON && editionsJSON[selectedBookKey]) {
                        const bookEditions = editionsJSON[selectedBookKey].collection;
                        bookEditions.filter(ed => ed.language.toLowerCase() !== 'arabic').forEach(edition => { 
                            const option = document.createElement('option');
                            option.value = edition.name;
                            option.textContent = `${edition.language}: ${edition.name} (${edition.author})`;
                            addTranslationToBookEditionSelect.appendChild(option);
                        });
                    }
                };
                if(manageBookDataSelect.value) manageBookDataSelect.onchange(); 
            }

                        async function _fetchAndParseTextFile(editionName) {
                const filePath = `${LOCAL_HADITH_FILES_DIR}${editionName}.txt`;
                const response = await fetch(filePath);
                if (!response.ok) throw new Error(`Failed to fetch ${filePath}: ${response.statusText}`);
                const textData = await response.text();
                const lines = textData.split(/\r?\n/);
                const parsedHadiths = {};
                
                lines.forEach((line, index) => {
                    const originalLineForLogging = line.substring(0, 150); // For logging purposes
                    let currentLine = line.trim(); // Trim whitespace from both ends of the line

                    if (currentLine === '') {
                        // console.debug(`Line #${index + 1} in ${editionName}.txt is empty. Skipping.`);
                        return; // Skip genuinely empty lines
                    }

                    const pipeIndex = currentLine.indexOf('|');

                    if (pipeIndex === -1) {
                        // No pipe found. This line doesn't match the 'number | content' structure.
                        // If we absolutely must not skip, we'd need a rule for these lines.
                        // For now, it's safer to assume they are not valid data lines if no pipe.
                        console.warn(`Line #${index + 1} in ${editionName}.txt does not contain a '|' separator. Skipping: "${originalLineForLogging}..."`);
                        return;
                    }

                    // Part before the first pipe, trimmed
                    const potentialNumberString = currentLine.substring(0, pipeIndex).trim();
                    // Part after the first pipe, trimmed
                    const content = currentLine.substring(pipeIndex + 1).trim();

                    if (potentialNumberString === '') {
                        // The part before the pipe is empty after trimming.
                        console.warn(`Line #${index + 1} in ${editionName}.txt has an empty number part before '|'. Skipping: "${originalLineForLogging}..."`);
                        return;
                    }

                    // Try to find all sequences of digits in the potentialNumberString
                    const digitSequences = potentialNumberString.match(/\d+/g);

                    if (digitSequences && digitSequences.length > 0) {
                        // Assume the *last* sequence of digits is the Hadith number.
                        // This handles cases like "Chapter 1 Hadith 23" -> "23"
                        // or "Book X Section Y Number 123" -> "123"
                        // or simply "456" -> "456"
                        const numberStr = digitSequences[digitSequences.length - 1];
                        const number = parseInt(numberStr, 10);

                        if (!isNaN(number)) {
                            if (parsedHadiths.hasOwnProperty(number)) {
                                console.warn(`Line #${index + 1} in ${editionName}.txt: Duplicate Hadith number ${number} found. Overwriting previous entry. Original line: "${originalLineForLogging}..." Previous content for ${number}: "${parsedHadiths[number].substring(0,50)}..."`);
                            }
                            parsedHadiths[number] = content;
                        } else {
                            // This case should be rare if \d+ matched.
                            console.error(`Line #${index + 1} in ${editionName}.txt: Critical error. Matched digits "${numberStr}" from "${potentialNumberString}" but parseInt resulted in NaN. Line: "${originalLineForLogging}..."`);
                        }
                    } else {
                        // No digits were found in the part before the pipe.
                        console.warn(`Line #${index + 1} in ${editionName}.txt: No digits found in the number part "${potentialNumberString}". Skipping line: "${originalLineForLogging}..."`);
                    }
                });
                
                if (Object.keys(parsedHadiths).length === 0 && lines.some(l => l.trim() !== '')) {
                    console.warn(`File ${editionName}.txt was processed, but no Hadiths were successfully parsed. Please check file format and console warnings.`);
                }
                return parsedHadiths;
            }

            async function _startImport() {
                const bookKey = importBookSelect.value;
                const arabicEditionName = importArabicEditionSelect.value; 
                const translationEditionName = importTranslationEditionSelect.value; 

                if (!bookKey || !arabicEditionName || !translationEditionName) {
                    _showMessage('Please select book and both editions.', 'error', importProgress); return;
                }
                if (!localInfoJSONData || !localInfoJSONData[bookKey]) {
                    _showMessage(`Book information for "${bookKey}" not found in local info.json. Please ensure info.json is loaded.`, 'error', importProgress); return;
                }

                const bookDetails = editionsJSON[bookKey]; 
                const arabicEditionDetails = bookDetails.collection.find(e => e.name === arabicEditionName);
                const translationEditionDetails = bookDetails.collection.find(e => e.name === translationEditionName);

                if (!arabicEditionDetails || !translationEditionDetails) {
                    _showMessage('Selected edition details not found in editions.json.', 'error', importProgress); return;
                }
                
                _showLoading(importProgress, `Importing ${bookDetails.name}...`);
                startImportBtn.disabled = true;

                try {
                    const bookInfoFromLocal = localInfoJSONData[bookKey];
                    const chapterNames = bookInfoFromLocal.metadata.sections || {};
                    
                    await _put(STORES.chapterInfo, { 
                        bookKey: bookKey, 
                        name: bookInfoFromLocal.metadata.name || bookDetails.name, 
                        chapters: chapterNames,
                        totalHadithInBook: bookInfoFromLocal.metadata.last_hadithnumber || 0
                    });
                    _showMessage('Chapter info processed. Fetching Arabic text file...', 'info', importProgress, 0);

                    const arabicTexts = await _fetchAndParseTextFile(arabicEditionName);
                    _showMessage('Arabic texts fetched. Fetching translation text file...', 'info', importProgress, 0);
                    const translationTexts = await _fetchAndParseTextFile(translationEditionName);
                    _showMessage('Translation texts fetched. Processing Hadith...', 'info', importProgress, 0);

                    let importedCount = 0;
                    const hadithsInInfoFile = bookInfoFromLocal.hadiths || [];
                    const totalToProcess = hadithsInInfoFile.length;

                    for (let i = 0; i < totalToProcess; i++) {
                        const apiHadithDetail = hadithsInInfoFile[i]; 
                        const apiHadithNumber = apiHadithDetail.hadithnumber;

                        const arabicTextContent = arabicTexts[apiHadithNumber];
                        const translationTextContent = translationTexts[apiHadithNumber];

                        if (!arabicTextContent || !translationTextContent) {
                            console.warn(`Missing Arabic or Translation for Hadith #${apiHadithNumber} in ${bookKey}. Arabic: ${!!arabicTextContent}, Trans: ${!!translationTextContent}`);
                            continue;
                        }
                        
                        const existingHadiths = await _getAllByIndex(STORES.hadiths, 'apiHadithNumber_bookKey', [apiHadithNumber, bookKey]);
                        const alreadyExists = existingHadiths.some(h => 
                            h.translations.some(t => t.editionName === translationEditionDetails.name)
                        );

                        if (alreadyExists) {
                            console.log(`Hadith ${bookKey} - ${apiHadithNumber} (${translationEditionDetails.name}) already imported. Skipping.`);
                            continue;
                        }

                        const chapterNum = String(apiHadithDetail.reference.book);
                        const hadithEntry = {
                            uuid: _uuidv4(),
                            arabicText: arabicTextContent,
                            translations: [{
                                editionName: translationEditionDetails.name,
                                language: translationEditionDetails.language,
                                text: translationTextContent,
                                author: translationEditionDetails.author
                            }],
                            primaryTranslationEditionName: translationEditionDetails.name,
                            sourceBookKey: bookKey,
                            sourceBookName: bookInfoFromLocal.metadata.name || bookDetails.name,
                            sourceChapterNumber: chapterNum,
                            sourceChapterName: chapterNames[chapterNum] || null,
                            sourceHadithNumberInBook: String(apiHadithDetail.reference.hadith),
                            apiHadithNumber: apiHadithNumber,
                            grades: apiHadithDetail.grades || [],
                            notes: '',
                            tags: [bookKey, (bookInfoFromLocal.metadata.name || bookDetails.name).toLowerCase().replace(/\s+/g, '-')],
                            bookmarked: false,
                            createdAt: new Date().toISOString(),
                            updatedAt: new Date().toISOString()
                        };
                        await _add(STORES.hadiths, hadithEntry);
                        importedCount++;
                        if (i % 50 === 0 || i === totalToProcess - 1) {
                             _showMessage(`Processing Hadith... ${importedCount} of ${totalToProcess} imported.`, 'info', importProgress, 0);
                        }
                    }
                    
                    _showMessage(`${importedCount} Hadith from "${bookDetails.name}" imported successfully!`, 'success', importProgress);
                    await _populateFilterDropdowns(); 
                    await _populateManageBookDataSelect();

                } catch (error) {
                    console.error("Import failed:", error);
                    _showMessage(`Import failed: ${error.message}`, 'error', importProgress, 0);
                } finally {
                     startImportBtn.disabled = false;
                }
            }
            
            async function _refreshChapterNames() {
                const bookKey = manageBookDataSelect.value;
                if (!bookKey) { _showMessage("Select a book.", "error", manageBookDataProgress); return; }
                if (!localInfoJSONData || !localInfoJSONData[bookKey]) {
                    _showMessage(`Book info for "${bookKey}" not in local info.json. Try re-loading info.json or re-importing.`, "error", manageBookDataProgress); return;
                }
                
                _showLoading(manageBookDataProgress, `Refreshing chapter names for ${editionsJSON[bookKey].name}...`);
                refreshChapterNamesBtn.disabled = true;

                try {
                    const bookInfoFromLocal = localInfoJSONData[bookKey];
                    const chapterNames = bookInfoFromLocal.metadata.sections || {};
                    
                    const existingChapterInfo = await _getById(STORES.chapterInfo, bookKey) || { bookKey: bookKey, name: editionsJSON[bookKey].name };
                    existingChapterInfo.chapters = chapterNames;
                    existingChapterInfo.totalHadithInBook = bookInfoFromLocal.metadata.last_hadithnumber || existingChapterInfo.totalHadithInBook || 0;
                    await _put(STORES.chapterInfo, existingChapterInfo);

                    const hadithsOfBook = await _getAllByIndex(STORES.hadiths, 'sourceBookKey', bookKey);
                    for (const hadith of hadithsOfBook) {
                        const chapNumStr = String(hadith.sourceChapterNumber);
                        if (chapNumStr && chapterNames[chapNumStr] && hadith.sourceChapterName !== chapterNames[chapNumStr]) {
                            hadith.sourceChapterName = chapterNames[chapNumStr];
                            await _put(STORES.hadiths, hadith);
                        }
                    }
                    _showMessage(`Chapter names for "${editionsJSON[bookKey].name}" refreshed.`, "success", manageBookDataProgress);
                    await _populateFilterDropdowns(); 
                } catch (error) {
                    console.error("Error refreshing chapter names:", error);
                    _showMessage(`Error: ${error.message}`, "error", manageBookDataProgress);
                } finally {
                    _clearLoading(manageBookDataProgress);
                    refreshChapterNamesBtn.disabled = false;
                }
            }

            async function _addAnotherTranslationToBook() {
                const bookKey = manageBookDataSelect.value;
                const newEditionName = addTranslationToBookEditionSelect.value; 

                if (!bookKey || !newEditionName) {
                    _showMessage("Select book and new translation.", "error", addTranslationProgress); return;
                }
                if (!localInfoJSONData || !localInfoJSONData[bookKey]) {
                     _showMessage(`Book info for "${bookKey}" not in local info.json.`, "error", addTranslationProgress); return;
                }

                const bookDetails = editionsJSON[bookKey];
                const newEditionDetails = bookDetails.collection.find(e => e.name === newEditionName);
                if (!newEditionDetails) { _showMessage("New edition details not found.", "error", addTranslationProgress); return; }
                
                _showLoading(addTranslationProgress, `Adding ${newEditionDetails.language} translation (${newEditionDetails.name})...`);
                addAnotherTranslationBtn.disabled = true;

                try {
                    const newTranslationTexts = await _fetchAndParseTextFile(newEditionName);
                    _showMessage('New translation file fetched. Processing...', 'info', addTranslationProgress, 0);

                    const hadithsOfThisBook = await _getAllByIndex(STORES.hadiths, 'sourceBookKey', bookKey);
                    let updatedCount = 0;
                    const totalInDbForBook = hadithsOfThisBook.length;

                    for (let i = 0; i < totalInDbForBook; i++) {
                        const dbHadith = hadithsOfThisBook[i];
                        if (dbHadith.translations.some(t => t.editionName === newEditionDetails.name)) continue; 

                        const newTextContent = newTranslationTexts[dbHadith.apiHadithNumber];
                        if (newTextContent) {
                            dbHadith.translations.push({
                                editionName: newEditionDetails.name,
                                language: newEditionDetails.language,
                                text: newTextContent,
                                author: newEditionDetails.author
                            });
                            dbHadith.updatedAt = new Date().toISOString();
                            await _put(STORES.hadiths, dbHadith);
                            updatedCount++;
                        }
                        if (i % 50 === 0 || i === totalInDbForBook - 1) {
                             _showMessage(`Processing... ${updatedCount} Hadith updated.`, 'info', addTranslationProgress, 0);
                        }
                    }
                    _showMessage(`${updatedCount} Hadith updated with "${newEditionDetails.name}" for "${bookDetails.name}".`, "success", addTranslationProgress);

                } catch (error) {
                    console.error("Error adding translation:", error);
                    _showMessage(`Error: ${error.message}`, "error", addTranslationProgress);
                } finally {
                    _clearLoading(addTranslationProgress);
                    addAnotherTranslationBtn.disabled = false;
                }
            }


            // --- Hadith of the Day ---
            async function _populateHotDTagFilter() {
                hotdTagFilter.innerHTML = '<option value="">-- Any Tag --</option>';
                const tags = await _getAll(STORES.tags);
                tags.sort((a,b) => a.name.localeCompare(b.name)).forEach(tag => {
                    const option = document.createElement('option');
                    option.value = tag.name; option.textContent = tag.name;
                    hotdTagFilter.appendChild(option);
                });
            }

            async function _generateHadithOfTheDay() {
                _showLoading(hadithOfTheDayCardContainer, "Finding a gem...");
                try {
                    let candidateHadiths;
                    const selectedTag = hotdTagFilter.value;
                    if (selectedTag) candidateHadiths = await _getAllByIndex(STORES.hadiths, 'tags', selectedTag);
                    else candidateHadiths = await _getAll(STORES.hadiths);

                    _clearLoading(hadithOfTheDayCardContainer);
                    if (candidateHadiths.length === 0) {
                        hadithOfTheDayCardContainer.innerHTML = `<p>No Hadith found${selectedTag ? ` with tag "${selectedTag}"` : ''}.</p>`;
                        return;
                    }
                    const randomHadith = candidateHadiths[Math.floor(Math.random() * candidateHadiths.length)];
                    await _renderHadithCard(randomHadith, hadithOfTheDayCardContainer, true);
                } catch (e) { console.error(e); _clearLoading(hadithOfTheDayCardContainer); hadithOfTheDayCardContainer.innerHTML = '<p>Error retrieving Hadith.</p>';}
            }


            // --- Backup & Restore ---
            async function _backupData() {
                try {
                    _showMessage("Preparing backup...", "info", messageAreaGlobal, 0);
                    const backupData = {};
                    for (const storeName of Object.values(STORES)) {
                        if (storeName === STORES.settings) { // Handle settings store carefully
                            const allSettings = await _getAll(STORES.settings);
                            // Filter out the large info.json if it's stored there, handle it separately
                            backupData[STORES.settings] = allSettings.filter(s => s.key !== LOCAL_INFO_JSON_DB_KEY);
                        } else {
                            backupData[storeName] = await _getAll(storeName);
                        }
                    }
                    // Explicitly back up localInfoJSONData (which should be the parsed content)
                    if (localInfoJSONData) {
                        backupData['_localInfoJSONDataContent'] = localInfoJSONData;
                    }
                    
                    const jsonString = JSON.stringify(backupData, null, 2);
                    const blob = new Blob([jsonString], { type: 'application/json' });
                    const url = URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    const date = new Date().toISOString().slice(0,10);
                    a.href = url; a.download = `hadith_gems_backup_${date}.json`;
                    document.body.appendChild(a); a.click(); document.body.removeChild(a);
                    URL.revokeObjectURL(url);
                    _showMessage("Backup created.", "success");
                } catch (e) { console.error(e); _showMessage(`Backup failed: ${e.message}`, "error"); }
            }

            async function _restoreData() {
                const file = restoreFileInput.files[0];
                if (!file) { _showMessage("Select backup file.", "error"); return; }
                if (!confirm("WARNING: Restoring will overwrite ALL data. Proceed?")) return;

                const reader = new FileReader();
                reader.onload = async (event) => {
                    try {
                        _showMessage("Restoring data...", "info", messageAreaGlobal, 0);
                        const backupData = JSON.parse(event.target.result);
                        
                        // Clear all stores first
                        for (const storeName of Object.values(STORES)) {
                            await _clearStore(storeName);
                        }

                        // Restore regular settings (excluding the large info.json if it was part of settings backup)
                        if (backupData[STORES.settings]) {
                            for (const item of backupData[STORES.settings]) {
                                if (item.key !== LOCAL_INFO_JSON_DB_KEY) { // Avoid restoring old potentially large item here
                                    await _add(STORES.settings, item);
                                }
                            }
                        }
                        
                        // Restore the large info.json data specifically
                        if (backupData['_localInfoJSONDataContent']) {
                            localInfoJSONData = backupData['_localInfoJSONDataContent'];
                            await _put(STORES.settings, { key: LOCAL_INFO_JSON_DB_KEY, value: localInfoJSONData });
                        } else {
                            localInfoJSONData = null; // Ensure it's cleared if not in backup
                        }
                        await SettingsManager.loadSettings(); // Apply other restored settings like theme, itemsPerPage

                        // Restore other stores
                        if (backupData[STORES.tags]) for (const item of backupData[STORES.tags]) await _add(STORES.tags, item);
                        if (backupData[STORES.chapterInfo]) for (const item of backupData[STORES.chapterInfo]) await _add(STORES.chapterInfo, item);
                        if (backupData[STORES.hadiths]) {
                            for (const item of backupData[STORES.hadiths]) {
                                const { id, ...hadithToRestore } = item; 
                                await _add(STORES.hadiths, hadithToRestore);
                            }
                        }
                        if (backupData[STORES.collections]) {
                            for (const item of backupData[STORES.collections]) {
                                const { id, ...collectionToRestore } = item;
                                await _add(STORES.collections, collectionToRestore);
                            }
                        }
                        
                        _showMessage("Data restored! App will reload.", "success", messageAreaGlobal, 0);
                        setTimeout(() => window.location.reload(), 2000);

                    } catch (e) { console.error(e); _showMessage(`Restore failed: ${e.message}. Data might be inconsistent.`, "error", messageAreaGlobal, 0);
                    } finally { restoreFileInput.value = ''; }
                };
                reader.readAsText(file);
            }


            // --- Event Listeners Setup ---
            function _setupEventListeners() {
                hadithForm.addEventListener('submit', _saveHadith);
                cancelEditHadithBtn.addEventListener('click', () => { _resetHadithForm(); _showView('allHadithView'); });
                addTranslationForm.addEventListener('submit', _handleAddTranslation);

                document.getElementById('applyFiltersBtn').addEventListener('click', _applyFilters);
                document.getElementById('resetFiltersBtn').addEventListener('click', _resetFilters);
                filterBook.addEventListener('change', _updateChapterFilter); 

                document.getElementById('addTagBtn').addEventListener('click', _addTag);
                tagsListContainer.addEventListener('click', (e) => {
                    if (e.target.classList.contains('edit-tag-btn')) _openEditTagModal(e.target.dataset.name);
                    else if (e.target.classList.contains('delete-tag-btn')) _deleteTag(e.target.dataset.name);
                });
                document.getElementById('saveEditedTagBtn').addEventListener('click', _saveEditedTag);
                document.getElementById('closeEditTagModal').addEventListener('click', () => _closeModal('editTagModal'));

                document.getElementById('addCollectionBtn').addEventListener('click', _addCollection);
                collectionsListContainer.addEventListener('click', (e) => {
                    if (e.target.classList.contains('view-collection-btn')) _openCollectionViewModal(parseInt(e.target.dataset.id));
                    else if (e.target.classList.contains('edit-collection-btn')) _openEditCollectionModal(parseInt(e.target.dataset.id));
                    else if (e.target.classList.contains('delete-collection-btn')) _deleteCollection(parseInt(e.target.dataset.id));
                });
                document.getElementById('closeCollectionDetailModal').addEventListener('click', () => { _closeModal('collectionDetailModal'); currentEditingCollectionId = null; });
                document.getElementById('saveHadithToCollectionBtn').addEventListener('click', _saveHadithToCollection);
                collectionDetailHadithList.addEventListener('click', (e) => { 
                    if (e.target.classList.contains('remove-hadith-from-coll-btn')) _removeHadithFromCollection(e.target.dataset.uuid);
                });
                document.getElementById('saveEditedCollectionBtn').addEventListener('click', _saveEditedCollection);
                document.getElementById('closeEditCollectionModal').addEventListener('click', () => _closeModal('editCollectionModal'));

                importBookSelect.addEventListener('change', _populateEditionSelects);
                startImportBtn.addEventListener('click', _startImport);
                refreshChapterNamesBtn.addEventListener('click', _refreshChapterNames);
                addAnotherTranslationBtn.addEventListener('click', _addAnotherTranslationToBook);

                document.getElementById('generateHotDBtn').addEventListener('click', _generateHadithOfTheDay);
                themeSelector.addEventListener('change', (e) => SettingsManager.setSetting('theme', e.target.value));
                itemsPerPageSelector.addEventListener('change', (e) => SettingsManager.setSetting('itemsPerPage', e.target.value));
                document.getElementById('backupDataBtn').addEventListener('click', _backupData);
                document.getElementById('restoreDataBtn').addEventListener('click', _restoreData);
                document.getElementById('currentYear').textContent = new Date().getFullYear();
            }

            // --- Public API ---
            async function init() {
                _initNavigation();
                _initModals();
                try {
                    await _initDB();
                    await SettingsManager.loadSettings(); 
                    _loadEditionsJSON(); 
                    await _loadLocalInfoJSON(); 
                    
                    _showView('allHadithView'); 
                    _setupEventListeners();
                } catch (error) {
                    console.error("Initialization failed:", error);
                     _showMessage("App initialization failed. Refresh. If persists, data might be corrupted.", "error", messageAreaGlobal, 0);
                }
            }

            return { init };
        })();

        document.addEventListener('DOMContentLoaded', App.init);
        // --- END OF SCRIPT ---
    </script>
</body>
</html>