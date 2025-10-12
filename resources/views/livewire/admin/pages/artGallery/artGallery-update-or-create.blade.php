@php
    use App\Enums\BooleanEnum;
    use Illuminate\Support\Str;
    use App\Helpers\Constants;
@endphp
<div class="">
    <form wire:submit="submit">
        <x-admin.shared.bread-crumbs :breadcrumbs="$breadcrumbs" :breadcrumbs-actions="$breadcrumbsActions"/>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
            <div class="col-span-2 grid grid-cols-1 gap-4">
                <x-card :title="trans('general.page_sections.data', locale: app()->getFallbackLocale())" shadow separator progress-indicator="submit">
                    <div class="grid grid-cols-1 gap-4">
                        <x-input :label="trans('validation.attributes.title', locale: app()->getFallbackLocale())"
                                 wire:model="title"
                        />
                        <x-input :label="trans('validation.attributes.description', locale: app()->getFallbackLocale())"
                                 wire:model="description"
                        />
                        <input type="hidden" wire:model="slug" />
                    </div>
                </x-card>

                <x-card :title="trans('page.media')" shadow separator progress-indicator="submit">
                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                        <!-- Image Section -->
                        <div>
                            <x-admin.shared.file-input :label="trans('artGallery.images', locale: app()->getFallbackLocale())"
                                                       wire:model="images"
                                                       multiple
                                                       accept="image/*"
                            />

                            <!-- Existing Images -->
                            @if(count($existingImages) > 0)
                                <div class="mt-4">
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">Existing Images</h4>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                        @foreach($existingImages as $image)
                                            <div class="relative group">
                                                <img src="{{ $image['url'] }}"
                                                     alt="{{ $image['name'] }}"
                                                     class="w-full h-32 object-cover rounded border cursor-pointer hover:opacity-80 transition-opacity"
                                                     onclick="openImageModal('{{ $image['url'] }}', '{{ $image['name'] }}')">
                                                <button type="button"
                                                        wire:click="deleteImage({{ $image['id'] }})"
                                                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity"
                                                        title="Delete image">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-xs p-1 rounded-b">
                                                    <span class="truncate block">{{ $image['name'] }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- New Images Preview -->
                            @if($images)
                                <div class="mt-4">
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">New Images</h4>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                        @foreach($images as $index => $image)
                                            <div class="relative group">
                                                <img src="{{ $image->temporaryUrl() }}"
                                                     alt="Preview"
                                                     class="w-full h-32 object-cover rounded border cursor-pointer hover:opacity-80 transition-opacity"
                                                     onclick="openImageModal('{{ $image->temporaryUrl() }}', '{{ $image->getClientOriginalName() }}')">
                                                <button type="button"
                                                        wire:click="removeNewImage({{ $index }})"
                                                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity"
                                                        title="Remove image">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-xs p-1 rounded-b">
                                                    <span class="truncate block">{{ $image->getClientOriginalName() }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Videos Section -->
                        <div>
                            <x-admin.shared.file-input :label="trans('artGallery.videos', locale: app()->getFallbackLocale())"
                                                       wire:model="videos"
                                                       multiple
                                                       accept="video/*"
                            />

                            <!-- Existing Videos -->
                            @if(count($existingVideos) > 0)
                                <div class="mt-4">
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">Existing Videos</h4>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                        @foreach($existingVideos as $video)
                                            <div class="relative group">
                                                <div class="w-full h-32 bg-gray-100 rounded border cursor-pointer hover:bg-gray-200 transition-colors flex items-center justify-center"
                                                     onclick="openVideoModal('{{ $video['url'] }}', '{{ $video['name'] }}')">
                                                    @if(!empty($video['poster_url']))
                                                        {{-- Poster image --}}
                                                        <img src="{{ $video['poster_url'] }}"
                                                             alt="Poster for {{ $video['name'] }}"
                                                             class="object-cover w-full h-full">
                                                        {{-- Play overlay --}}
                                                        <span class="absolute inset-0 flex items-center justify-center">
                                                            <i class="fas fa-play-circle text-4xl text-white bg-black/60 rounded-full p-3"></i>
                                                        </span>
                                                    @else
                                                        {{-- Fallback (no poster) --}}
                                                        <div class="flex flex-col items-center justify-center w-full h-full bg-gray-100 hover:bg-gray-200 transition-colors">
                                                            <i class="fas fa-play-circle text-4xl text-blue-500 mb-2"></i>
                                                            <p class="text-xs text-gray-600">{{ $video['name'] }}</p>
                                                        </div>
                                                    @endif
                                                </div>
                                                <button type="button"
                                                        wire:click="deleteVideo({{ $video['id'] }})"
                                                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity"
                                                        title="Delete video">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- New Videos Preview -->
                            @if($videos)
                                <div class="mt-4">
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">New Videos</h4>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                        @foreach($videos as $index => $video)
                                            <div class="relative group">
                                                <div class="w-full h-32 bg-blue-100 rounded border cursor-pointer hover:bg-blue-200 transition-colors flex items-center justify-center"
                                                     onclick="openVideoModal('{{ $video->temporaryUrl() }}', '{{ $video->getClientOriginalName() }}')">
                                                    <div class="flex flex-col items-center justify-center w-full h-full bg-blue-100 hover:bg-blue-200 transition-colors">
                                                        <i class="fas fa-play-circle text-4xl text-blue-500 mb-2"></i>
                                                        <p class="text-xs text-gray-600">{{ $video->getClientOriginalName() }}</p>
                                                    </div>
                                                </div>
                                                <button type="button"
                                                        wire:click="removeNewVideo({{ $index }})"
                                                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity"
                                                        title="Remove video">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </x-card>
            </div>

            <div class="col-span-1">
                <div class="sticky top-20">
                    <x-card :title="trans('general.page_sections.upload_image')" shadow separator progress-indicator="submit" class="">
                        <x-admin.shared.single-file-upload
                            default_image="{{ $model->getFirstMediaUrl('image', Constants::RESOLUTION_100_SQUARE) }}"
                        />
                    </x-card>

                    <x-card :title="trans('general.page_sections.publish_config', locale: app()->getFallbackLocale())" shadow separator progress-indicator="submit" class="mt-5">
                        <div class="grid grid-cols-1 gap-4">
                            <x-admin.shared.published-config has-published-at="0" useFallback="1"/>
                        </div>
                    </x-card>
                </div>
            </div>
        </div>


        <x-admin.shared.form-actions/>
    </form>

    <!-- Image Modal (Outside the form to prevent form submission) -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4">
        <div class="relative max-w-5xl max-h-full w-full h-full flex items-center justify-center">
            <button type="button" onclick="closeImageModal(event)" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300 z-10 bg-black bg-opacity-50 rounded-full w-10 h-10 flex items-center justify-center">
                <i class="fas fa-times"></i>
            </button>
            <div class="relative w-full h-full flex items-center justify-center">
                <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain rounded shadow-2xl">
                <div class="absolute bottom-4 left-4 text-white text-sm bg-black bg-opacity-70 px-3 py-2 rounded-lg backdrop-blur-sm">
                    <span id="modalImageName" class="font-medium"></span>
                </div>
            </div>
            <div class="absolute bottom-4 right-4 text-white text-xs bg-black bg-opacity-50 px-2 py-1 rounded">
                Press ESC to close
            </div>
        </div>
    </div>

    <!-- Video Modal (Outside the form to prevent form submission) -->
    <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4">
        <div class="relative max-w-5xl max-h-full w-full h-full flex items-center justify-center">
            <button type="button" onclick="closeVideoModal(event)" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300 z-10 bg-black bg-opacity-50 rounded-full w-10 h-10 flex items-center justify-center">
                <i class="fas fa-times"></i>
            </button>
            <div class="relative w-full h-full flex items-center justify-center">
                <video id="modalVideo" controls class="max-w-full max-h-full object-contain rounded shadow-2xl">
                    Your browser does not support the video tag.
                </video>
                <div class="absolute bottom-4 left-4 text-white text-sm bg-black bg-opacity-70 px-3 py-2 rounded-lg backdrop-blur-sm">
                    <span id="modalVideoName" class="font-medium"></span>
                </div>
            </div>
            <div class="absolute bottom-4 right-4 text-white text-xs bg-black bg-opacity-50 px-2 py-1 rounded">
                Press ESC to close
            </div>
        </div>
    </div>

    <script>
        function openImageModal(imageUrl, imageName) {
            document.getElementById('modalImage').src = imageUrl;
            document.getElementById('modalImageName').textContent = imageName;
            document.getElementById('imageModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal(event) {
            // Prevent any form submission
            if (event) {
                event.preventDefault();
                event.stopPropagation();
                event.stopImmediatePropagation();
            }
            document.getElementById('imageModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openVideoModal(videoUrl, videoName) {
            const videoElement = document.getElementById('modalVideo');
            videoElement.src = videoUrl;
            document.getElementById('modalVideoName').textContent = videoName;
            document.getElementById('videoModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Autoplay the video when modal opens
            videoElement.play().catch(function(error) {
                console.log('Video autoplay failed:', error);
            });
        }

        function closeVideoModal(event) {
            // Prevent any form submission
            if (event) {
                event.preventDefault();
                event.stopPropagation();
                event.stopImmediatePropagation();
            }

            // Pause and reset the video
            const videoElement = document.getElementById('modalVideo');
            videoElement.pause();
            videoElement.currentTime = 0;

            document.getElementById('videoModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close image modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal(e);
            }
        });

        // Close video modal when clicking outside the video
        document.getElementById('videoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVideoModal(e);
            }
        });

        // Close modals with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeImageModal(e);
                closeVideoModal(e);
            }
        });

        // Prevent form submission when clicking modal elements
        document.getElementById('imageModal').addEventListener('click', function(e) {
            e.stopPropagation();
        });

        document.getElementById('videoModal').addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Additional safety: prevent any form submission from modals
        document.getElementById('imageModal').addEventListener('submit', function(e) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        });

        document.getElementById('videoModal').addEventListener('submit', function(e) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        });
    </script>
</div>
