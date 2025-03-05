import { ListBulletIcon } from '@heroicons/react/24/outline';

import { ChapterItem, SubChapterItem } from './chapter-items';
import SidebarTitle from './sidebar-title';

export default function Chapters() {
  return (
    <div className="space-y-4">
      <SidebarTitle icon={<ListBulletIcon />}>chapters</SidebarTitle>
      <ol className="link-container grid list-decimal gap-2 pl-14 font-bold">
        <ChapterItem to="/" title="Introduction" isActive={true} />
        <ChapterItem to="/" title="Introduction" />
        <ChapterItem to="/" title="Creating a New Rails Application">
          <ul className="mt-2 grid list-[circle] gap-2 pl-4 font-normal">
            <SubChapterItem to="/" title="Prerequisites2" isActive={true} />
            <SubChapterItem to="/" title="Prerequisites2" />
          </ul>
        </ChapterItem>
      </ol>
    </div>
  );
}
